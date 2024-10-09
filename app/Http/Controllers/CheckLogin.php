<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckLogin extends Controller
{
    public function login(Request $request, $id = null, $password = null)
    {
        if (is_null($id) && is_null($password)) {
            return response("Login is required", 400);
        }

        if (is_null($password)) {
            return response("Password is required", 400);
        }
        if (is_null($id)) {
            return response("ID is required", 400);
        }

        if ($id !== 'admin' || $password !== 'admin') {
            return response("Wrong user or password", 401);
        }

        return response("Welcome", 200);
    }
}
