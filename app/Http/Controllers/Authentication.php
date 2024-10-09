<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Authentication extends Controller
{
    public function showLoginForm()
    {
        return view('Nineteen.login');
    }

    public function login(Request $request)
    {
        $uname = $request->input('uname');
        $password = $request->input('password');

        $user = DB::table('user')->where('uname', $uname)->first();

        if ($user && $user->password === $password) {
            return redirect("/success");
        } else {

            return redirect("/login2")->with('error', 'Invalid username or password.');
        }
    }
}
