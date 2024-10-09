<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostDataController extends Controller
{    
    public function postData(Request $request)
    {        
        $name = $request->input('name');
        $email = $request->input('email');
       
        return "Data posted successfully! <br> Name: $name <br> Email: $email";
    }
}
