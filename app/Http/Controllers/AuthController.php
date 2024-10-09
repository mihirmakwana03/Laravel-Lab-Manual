<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{   
    public function login(Request $request)
    {     
        $uname = $request->input('username');          
        if ($request->input('username') === "admin" && $request->input('password') === "admin") {         
            return "User Authenticated! <br> Username: $uname";
        }
    
        return 'Invalid username or password';
    }
}
