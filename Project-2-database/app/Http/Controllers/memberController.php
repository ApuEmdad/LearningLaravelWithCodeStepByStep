<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    function showList()
    {
        $data = Member::paginate(5);
        return view('MemberList', ['members' => $data]);
    }

    function deleteMember($id)
    {
        $data = Member::find($id);
    }
}