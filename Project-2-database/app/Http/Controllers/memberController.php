<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    /* get members */
    function showList()
    {
        $data = Member::paginate(5);
        return view('MemberList', ['members' => $data]);
    }
    /* delete members */
    function deleteMember($id)
    {
        $data = Member::find($id);
        $data->delete();
        return redirect('members');
    }

    /* update members */
    function editMember($id)
    {
        $data = Member::find($id);
        return view('editMember', ["data" => $data]);
    }

    function updateMember(Request $req)
    {
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->save();
        return redirect('members');
    }
}