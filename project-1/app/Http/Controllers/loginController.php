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
        return $request->input();
    }
}