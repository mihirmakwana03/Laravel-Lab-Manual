<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CubeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $number = $request->route('num');
        $cube = $number * $number * $number;
        return "The cube of {$number} is {$cube}";
    }
}
