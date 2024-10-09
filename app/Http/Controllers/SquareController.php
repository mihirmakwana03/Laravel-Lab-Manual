<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquareController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $number = $request->route('num');
        $square = $number * $number;
        return "The square of {$number} is {$square}";
    }
}
