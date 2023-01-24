<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    //
    function login(Request $request)
    {
        $data = $request->input();
        // return $data;
        $request->session()->put('user', $data['user']);
        echo session('user');
    }
}