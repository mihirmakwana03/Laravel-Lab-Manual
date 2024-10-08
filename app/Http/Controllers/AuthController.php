<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->input('username') === 'admin' && $request->input('password') === 'admin') {
            return view('dashboard');  
        } else {
            return "Invalid username or password.";  
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
