<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function showSearchForm()
    {
        return view('TwentyThree.search');
    }

    public function searchUser(Request $request)
    {
        $uname = $request->input('uname');

        $users = DB::table('user')
                    ->where('uname', 'like', '%' . $uname . '%')
                    ->get();

        return view('TwentyThree.search', ['users' => $users, 'searchTerm' => $uname]);
    }
}
