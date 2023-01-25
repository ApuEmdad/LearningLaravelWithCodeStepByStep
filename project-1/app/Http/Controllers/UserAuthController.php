<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    //
    function login(Request $request)
    {
        $data = $request->input();
        $request->session()->put([
            'user' => $data['user'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]); 
       /*  echo session('user');
        echo session('email');
        echo session('password'); */
        // return $data;

       return redirect('/profile');
       
    }
}