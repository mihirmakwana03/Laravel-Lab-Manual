<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function showUsers()
    {
        $users = DB::table('user')->get();
        return view('TwentyTwo.show', ['users' => $users]);
    }
    public function deleteUser($uid)
    {
        DB::table('user')->where('uid', $uid)->delete();
        return redirect('/usersDelete')->with('success', 'User deleted successfully!');
    }
}
