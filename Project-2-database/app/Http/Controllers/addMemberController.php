<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class addMemberController extends Controller
{
    function addMember(Request $req)
    {
        $member = new Member();

        $member->name = $req->name;
        $member->email = $req->email;
        $member->save();
        return redirect('addMember');
    }
}