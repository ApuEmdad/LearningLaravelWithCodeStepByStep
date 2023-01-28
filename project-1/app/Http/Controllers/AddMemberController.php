<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMemberController extends Controller
{
    function addMember(Request $request)
    {
        $data = $request->input();
        $request->session()->flash('member', $data['member']);
        return redirect('addMember');
    }
}
