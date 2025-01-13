<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the login credentials
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ],
        [
            'username.required' => 'username harus diisi',
            'password.required' => 'password harus diisi',
        ]
    );

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'username' => 'username atau password salah',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
