<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $uname = $request->route('uname');
        $pass = $request->route('pass');

        if ($uname == 'admin' && $pass == 'admin') {
            return redirect('/');
        }
        
        return "Login Failed";
    }
}
