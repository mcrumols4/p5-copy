<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller {
    /*
     * Display the user's profile form.
     */
    public function edit(Request $request): Response {
        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }

    /*
     * Update the user's profile information.
     */
    public function AdminAddUser(Request $request)
    {
        // Validate the request data 
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email', // Validate email uniqueness
            'password' => 'required|string|min:8',
        ], [
            'email.unique' => 'Aquest correu electrònic ja està registrat.', // Message for unique email
        ]);

        // Create the user if validation passes
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => 1, // Adjust the role as needed 
            'password' => bcrypt($validated['password']),
        ]);

        // Redirect to the previous page with a success message
        return redirect()->back()->with('success', 'Usuari creat correctament.');
    }
    
    public function update(ProfileUpdateRequest $request): RedirectResponse {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return to_route('profile.edit');
    }
    
    /*
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    
    public function delete($id) {
    
        $event = User::find($id);
        $event->delete();

        return Redirect::to('/dashboard')->with('success', 'Usuario eliminado correctamente');
    }

    public function logout() {
        Auth::logout();
        return to_route('welcome');
    }

    public function getAllUsers() {
        $user = Auth::user();
        $users = User::where('id', '<>', $user->id)->get();
        return Inertia::render('Dashboard', [
            "users" => $users
        ]);
    }
    public function getUsersEditing($id) {
        $user = Auth::user();
        $users = User::where('id', '=', $id)->get();
        return Inertia::render('EditUsers', [
            "users" => $users
        ]);
    }

    public function AdminUpdateUsers(Request $request, $id) {
        $name = $request->get("name");
        $email = $request->get("email");
        $password = $request->get("password");
        
        $event = User::find($id);
        $event->name = $name;
        $event->email = $email;
        if ($password != null) {
            $event->password = bcrypt($password);
        }
        $event->save();

        // Return a JSON response for Inertia to handle without reloading the page
        if ($request->wantsJson()) {
            return response()->json(['success' => 'Usuario modificado correctamente']);
        }
        
        // If not an AJAX request, redirect with flash message
        return back()->with('success', 'Usuario modificado correctamente');
    }
}
