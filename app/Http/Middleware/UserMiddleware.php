<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response //Function to handle the middleware
    {
        if (\Illuminate\Support\Facades\Auth::user() != null) {
            $role = \Illuminate\Support\Facades\Auth::user()->role;

            if ($role >= 2) {
                return to_route("welcome"); //Change to the welcome page
            } else {
    
                return $next($request); //Return the next request
            }
        } else {
            
            return to_route("welcome"); //Change to the welcome page
        }
    }
}