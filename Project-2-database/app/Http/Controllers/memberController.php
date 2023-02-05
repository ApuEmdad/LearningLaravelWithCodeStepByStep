<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /* update members view*/
    function editMember($id)
    {
        $data = Member::find($id);
        return view('editMember', ["data" => $data]);
    }
    /* update members operation*/
    function updateMember(Request $req)
    {
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->save();
        return redirect('members');
    }

    /* Query Builder:  */
    function ShowDataFromDB()
    {
        $data = DB::table('members')->get();
        // returns an array of json data
        // return $data; 
        /*  return view('ShowDataFromDB', ['members' => $data]); */
        //    returns the data in tabular form
        /* return $data
        ->where('email', "effat@effat"); //returns all effat@effat=3 ids */

        // return $data->count(); // returns total number of data

        /* insert data */
        /*    return DB::table('members')
        ->insert(
        [
        "name" => "tonmoy",
        "email" => "tonmoy@tonmoy"
        ]
        ); */

        /* update data */
        /*    return DB::table('members')
        ->where('id', 10)
        ->insert(
        [
        "name" => "tonmoy",
        "email" => "tonmoy@tonmoy"
        ]
        ); */

        /*    return DB::table('members')
        ->where('id', 10) ->delete()
        */

    }
}