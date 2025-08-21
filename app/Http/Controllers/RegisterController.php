<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Show the login form
    public function showRegisterForm()
    {
        return view('register'); // make sure resources/views/login.blade.php exists
    }

    // Handle login submission
    public function login(Request $request)
    {
        $credentials = $request->only('name','email', 'password', 'conformpassword');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('dashboard');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
            'conformpassword' => 'not same password'
        ])->withInput();
    }

}
