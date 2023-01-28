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


        return redirect('/profile');
    }
}
