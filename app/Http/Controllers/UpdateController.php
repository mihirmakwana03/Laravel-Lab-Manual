<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function editUser($uid)
    {
        $user = DB::table('user')->where('uid', $uid)->first();

        return view('TwentyOne.edit', ['user' => $user]);
    }
    public function updateUser(Request $request, $uid)
    {
        $uname = $request->input('uname');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $city = $request->input('city');

        DB::table('user')
            ->where('uid', $uid)
            ->update([
                'uname' => $uname,
                'email' => $email,
                'mobile' => $mobile,
                'city' => $city,
            ]);

        return redirect('/users')->with('success', 'User updated successfully!');
    }
}
