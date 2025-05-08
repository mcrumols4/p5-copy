<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;
use Inertia\Inertia;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        try {
            Log::info('Iniciando redirección a ' . $provider);
            
            // Verificar que el proveedor es válido

            if (!in_array($provider, ['google', 'github', 'twitter', 'x', 'spotify', 'twitch', 'linkedin-openid', 'discord'])) {

                Log::error('Proveedor no válido: ' . $provider);
                return redirect()->route('login')
                    ->with('error', 'Proveedor de autenticación no válido: ' . $provider);
            }
            
            // Mapear 'x' a 'twitter' para compatibilidad
            $driverName = ($provider === 'x') ? 'twitter' : $provider;
          
            // Configurar la URL de redirección manualmente para X
            if ($provider === 'x') {
                $redirectUrl = config('services.twitter.redirect');
                Log::info('URL de redirección forzada para X: ' . $redirectUrl);
                return Socialite::driver('twitter')
                    ->redirectUrl($redirectUrl)
                    ->redirect();
            }
            
            // Configuración específica para Spotify - IMPLEMENTACIÓN PERSONALIZADA
            if ($provider === 'spotify') {
                Log::info('Redirección personalizada para Spotify');
                $clientId = config('services.spotify.client_id');
                $redirectUri = config('services.spotify.redirect');
                
                Log::info('Spotify redirect URI from config: ' . $redirectUri);
                
                // Fix: Para localhost usamos http, pero para el servidor usamos https
                if (env('APP_ENV') === 'local' && strpos($redirectUri, 'localhost') !== false) {
                    $redirectUri = str_replace('https://', 'http://', $redirectUri);
                    Log::info('Local environment detected, using: ' . $redirectUri);
                } else {
                    // Asegurar que estamos usando https en producción
                    if (strpos($redirectUri, 'https://') === false && strpos($redirectUri, 'http://') === 0) {
                        $redirectUri = str_replace('http://', 'https://', $redirectUri);
                        Log::info('Production environment detected, enforcing HTTPS: ' . $redirectUri);
                    }
                }
                
                $scope = 'user-read-private user-read-email user-top-read playlist-read-private';
                
                $url = 'https://accounts.spotify.com/authorize' . 
                    '?client_id=' . $clientId .
                    '&response_type=code' .
                    '&redirect_uri=' . urlencode($redirectUri) .
                    '&scope=' . urlencode($scope);
                
                Log::info('URL de redirección final para Spotify: ' . $url);
                
                return redirect($url);
            }

            // Configuración específica para Twitch
            if ($provider === 'twitch') {
                Log::info('Redirección para Twitch con scopes específicos');
                return Socialite::driver('twitch')
                    ->scopes(['user:read:email'])
                    ->redirect();
            }

            // Configuración específica para Discord
            if ($provider === 'discord') {
                Log::info('Redirección para Discord con scopes específicos');
                return Socialite::driver('discord')
                    ->scopes(['identify', 'email'])
                    ->redirect();
            }
            
            // Para otros proveedores, dejar que Socialite maneje la redirección
            Log::info('Redirección estándar para ' . $provider);
            return Socialite::driver($driverName)->redirect();
        } catch (Exception $e) {
            Log::error('Error en redirectToProvider para ' . $provider . ': ' . $e->getMessage());
            return redirect()->route('login')
                ->with('error', 'Error al redirigir a ' . $provider . ': ' . $e->getMessage());
        }
    }
    

    public function handleProviderCallback($provider, Request $request)
    {
        try {
            Log::info('Iniciando callback de ' . $provider);
            
            // CASO ESPECIAL PARA SPOTIFY - IMPLEMENTACIÓN PERSONALIZADA
            if ($provider === 'spotify') {
                Log::info('Procesando callback personalizado de Spotify');
                
                if (!$request->has('code')) {
                    Log::error('No se recibió código de autorización de Spotify');
                    return redirect()->route('login')
                        ->with('error', 'Error al iniciar sesión con Spotify: No se recibió código de autorización');
                }
                
                // Obtener código de autorización
                $code = $request->code;
                Log::info('Código de autorización recibido: ' . $code);
                
                // Obtener URI de redirección
                $redirectUri = config('services.spotify.redirect');
                
                // Mismo ajuste que en redirectToProvider
                if (env('APP_ENV') === 'local' && strpos($redirectUri, 'localhost') !== false) {
                    $redirectUri = str_replace('https://', 'http://', $redirectUri);
                    Log::info('Local environment detected in callback, using: ' . $redirectUri);
                } else {
                    // Asegurar que estamos usando https en producción
                    if (strpos($redirectUri, 'https://') === false && strpos($redirectUri, 'http://') === 0) {
                        $redirectUri = str_replace('http://', 'https://', $redirectUri);
                        Log::info('Production environment detected in callback, enforcing HTTPS: ' . $redirectUri);
                    }
                }
                
                // Intercambiar código por token
                try {
                    Log::info('Intentando intercambiar código por token con redirect_uri: ' . $redirectUri);
                    
                    $response = Http::asForm()->post('https://accounts.spotify.com/api/token', [
                        'grant_type' => 'authorization_code',
                        'code' => $code,
                        'redirect_uri' => $redirectUri,
                        'client_id' => config('services.spotify.client_id'),
                        'client_secret' => config('services.spotify.client_secret'),
                    ]);
                    
                    if ($response->failed()) {
                        Log::error('Error al conectar con Spotify API: ' . $response->body());
                        return redirect()->route('login')
                            ->with('error', 'Error al iniciar sesión con Spotify: ' . $response->status());
                    }
                    
                    $tokenData = $response->json();
                    
                    // Guardar token en sesión
                    session(['spotify_token' => $tokenData['access_token']]);
                    
                    // Obtener datos del perfil del usuario
                    $profileResponse = Http::withToken($tokenData['access_token'])
                        ->get('https://api.spotify.com/v1/me');
                    
                    if ($profileResponse->failed()) {
                        Log::error('Error al obtener perfil de Spotify: ' . $profileResponse->body());
                        return redirect()->route('login')
                            ->with('error', 'Error al obtener información del perfil de Spotify');
                    }
                    
                    $profileData = $profileResponse->json();
                    
                    // Obtener email
                    $email = $profileData['email'] ?? null;
                    if (!$email) {
                        $email = $profileData['id'] . '@spotify.temp';
                        Log::info('Creando email temporal para usuario de Spotify: ' . $email);
                    }
                    
                    // Buscar usuario por email o provider_id
                    $user = User::where('email', $email)
                             ->orWhere(function($query) use ($profileData) {
                                 $query->where('provider', 'spotify')
                                       ->where('provider_id', $profileData['id']);
                             })
                             ->first();
                    
                    // Asignar rol 2 (usuario normal)
                    $role = 2;
                    
                    if (!$user) {
                        Log::info('Creando nuevo usuario para ' . $email . ' desde Spotify');
                        
                        $name = $profileData['display_name'] ?? 'Usuario Spotify';
                        
                        $user = User::create([
                            'name' => $name,
                            'email' => $email,
                            'password' => bcrypt(Str::random(16)),
                            'provider' => 'spotify',
                            'provider_id' => $profileData['id'],
                            'role' => $role,
                        ]);
                    } else {
                        Log::info('Actualizando usuario existente: ' . $user->email . ' con Spotify');
                        
                        $updateData = [
                            'provider' => 'spotify',
                            'provider_id' => $profileData['id'],
                            'role' => $role,
                        ];
                        
                        if (isset($profileData['display_name'])) {
                            $updateData['name'] = $profileData['display_name'];
                        }
                        
                        $user->update($updateData);
                    }
                    
                    Auth::login($user);
                    Log::info('Usuario autenticado exitosamente: ' . $user->email . ' con Spotify - Rol: ' . $user->role);
                    
                    // Redirigir basado en el rol
                    if ($user->role == 1) {
                        return Inertia::location(route('dashboard.list'));
                    } else {
                        return Inertia::location(route('welcome'));
                    }
                    
                } catch (\Exception $e) {
                    Log::error('Error en procesamiento de Spotify: ' . $e->getMessage());
                    Log::error('Stack trace: ' . $e->getTraceAsString());
                    return redirect()->route('login')
                        ->with('error', 'Error al iniciar sesión con Spotify: ' . $e->getMessage());
                }
            }
            
            // Para otros proveedores, continuar con el flujo normal
            // Mapear 'x' a 'twitter' para compatibilidad
            $driverName = ($provider === 'x') ? 'twitter' : $provider;
            
            // Configurar la URL de redirección manualmente para X en el callback
            if ($provider === 'x') {
                $redirectUrl = config('services.twitter.redirect');
                Log::info('URL de callback forzada para X: ' . $redirectUrl);
                $socialUser = Socialite::driver('twitter')
                    ->redirectUrl($redirectUrl)
                    ->user();
            } else {
                $socialUser = Socialite::driver($driverName)->user();
            }
            
            // Obtener email o crear uno temporal para X/Twitter, Spotify o Twitch
            $email = $socialUser->getEmail();
            if (!$email && ($provider === 'twitter' || $provider === 'x')) {
                $email = $socialUser->getId() . '@twitter.temp';
                Log::info('Creando email temporal para usuario de Twitter: ' . $email);
            } else if (!$email && $provider === 'spotify') {
                // En caso de que Spotify no proporcione email directamente
                if (isset($socialUser->user['email'])) {
                    $email = $socialUser->user['email'];
                    Log::info('Email obtenido de datos adicionales de Spotify: ' . $email);
                } else {
                    $email = $socialUser->getId() . '@spotify.temp';
                    Log::info('Creando email temporal para usuario de Spotify: ' . $email);
                }
            } else if (!$email && $provider === 'twitch') {
                if (isset($socialUser->user['email'])) {
                    $email = $socialUser->user['email'];
                    Log::info('Email obtenido de datos adicionales de Twitch: ' . $email);
                } else {
                    $email = $socialUser->getId() . '@twitch.temp';
                    Log::info('Creando email temporal para usuario de Twitch: ' . $email);
                }
            }
            else if (!$email && $provider === 'discord') {
                if (isset($socialUser->user['email'])) {
                    $email = $socialUser->user['email'];
                    Log::info('Email obtenido de datos adicionales de Discord: ' . $email);
                } else {
                    $email = $socialUser->getId() . '@discord.temp';
                    Log::info('Creando email temporal para usuario de Discord: ' . $email);
                }
            }
            
            Log::info('Usuario social obtenido de ' . $provider . ': ' . $email);
            
            // Buscar usuario por email o por provider_id
            $user = User::where('email', $email)
                         ->orWhere(function($query) use ($provider, $socialUser) {
                             $query->where('provider', $provider)
                                   ->where('provider_id', $socialUser->getId());
                         })
                         ->first();

            // Asignar rol 2 en lugar de rol 1 (admin)
            $role = 2;

            if (!$user) {
                Log::info('Creando nuevo usuario para ' . $email . ' desde ' . $provider);
                
                // Algunos proveedores pueden no devolver un nombre
                $name = $socialUser->getName() ?: ($socialUser->getNickname() ?: 'Usuario');

                // Manejo especial para Spotify
                if ($provider === 'spotify' && !$name) {
                    if (isset($socialUser->user['display_name'])) {
                        $name = $socialUser->user['display_name'];
                    }
                }

                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt(Str::random(16)),
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                    'role' => $role,
                ]);
            } else {
                Log::info('Actualizando usuario existente: ' . $user->email . ' con proveedor ' . $provider);
                
                // Update the user with the provider information
                $updateData = [
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                    'role' => $role,
                ];
                
                // Obtener nombre para Spotify
                if ($provider === 'spotify') {
                    if (isset($socialUser->user['display_name'])) {
                        $updateData['name'] = $socialUser->user['display_name'];
                    } elseif ($socialUser->getName()) {
                        $updateData['name'] = $socialUser->getName();
                    } elseif ($socialUser->getNickname()) {
                        $updateData['name'] = $socialUser->getNickname();
                    }
                } else {
                    // Para otros proveedores
                    if ($socialUser->getName()) {
                        $updateData['name'] = $socialUser->getName();
                    } elseif ($socialUser->getNickname()) {
                        $updateData['name'] = $socialUser->getNickname();
                    }
                }
                
                $user->update($updateData);
            }

            Auth::login($user);
            Log::info('Usuario autenticado exitosamente: ' . $user->email . ' con ' . $provider . ' - Rol: ' . $user->role);

            // Redirigir basado en el rol
            if ($user->role == 1) {
                // Si es admin, ir al dashboard
                return Inertia::location(route('dashboard.list'));
            } else {
                // Si no es admin, ir a welcome
                return Inertia::location(route('welcome'));
            }
        } catch (Exception $e) {
            Log::error('Error en handleProviderCallback para ' . $provider . ': ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            
            return redirect()->route('login')
                ->with('error', 'Error al iniciar sesión con ' . $provider . ': ' . $e->getMessage());
        }
    }
}