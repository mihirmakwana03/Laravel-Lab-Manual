<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showForm()
    {
        return view('Eighteen.form');
    }

    public function insert(Request $request)
    {
        $uid = $request->input('uid');
        $uname = $request->input('uname');
        $password = $request->input('password');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $city = $request->input('city');

        DB::table('user')->insert([
            'uid' => $uid,
            'uname' => $uname,
            'password' => $password,
            'email' => $email,
            'mobile' => $mobile,
            'city' => $city,
        ]);

        echo "<script>alert('Record inserted successfully.'); window.location.href='/user/form';</script>";
    }
}
