<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('login'); // make sure resources/views/login.blade.php exists
    }

    // Handle login submission
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('dashboard');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ])->withInput();
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
