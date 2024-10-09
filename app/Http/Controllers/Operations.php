<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Operations extends Controller
{
    public function factorial($num)
    {
        $fact = 1;
        for ($i = 1; $i <= $num; $i++) {
            $fact *= $i;
        }
        return "Factorial of $num is $fact";
    }

    public function sumOdd($num)
    {
        $sum = 0;
        for ($i = 1; $i <= $num; $i++) {
            if ($i % 2 != 0) {
                $sum += $i;
            }
        }
        return "Sum of odd numbers upto $num is $sum";
    }

    public function sumEven($num)
    {
        $sum = 0;
        for ($i = 1; $i <= $num; $i++) {
            if ($i % 2 == 0) {
                $sum += $i;
            }
        }
        return "Sum of even numbers upto $num is $sum";
    }
}
