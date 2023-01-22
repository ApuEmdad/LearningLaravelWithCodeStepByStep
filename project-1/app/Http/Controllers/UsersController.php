<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function viewLoad()
    {
        $users = ['mamun', 'apu', 'tonmoy'];
        return view('users', ['user' => 'apu', 'users' => $users]);
    }
}