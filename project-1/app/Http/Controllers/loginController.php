<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function viewLoginForm()
    {
        return view("login");
    }
    function getUser(Request $request)
    {
        $request->validate([
            'name' => 'required | max: 10',
            'password' => 'required | min: 4',
        ]);
        return $request->input();
    }
}