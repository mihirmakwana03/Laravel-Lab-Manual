<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisplayController extends Controller
{
    public function showAllUsers()
    {
        // Fetch all records from the user table
        $users = DB::table('user')->get();

        // Pass the user records to the view
        return view('Twenty.index', ['users' => $users]);
    }
}
