<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    function viewLoad()
    {
        $users = ['mamun', 'apu', 'tonmoy'];
        return view('users', ['user' => 'apu', 'users' => $users]);
    }

    function viewAllUsers()
    {
        $users = ['mamun', 'apu', 'tonmoy'];

        return DB::select("select * from users");
        // return view('AllUsers', ['user' => 'apu', 'users' => $users]);
    }


}