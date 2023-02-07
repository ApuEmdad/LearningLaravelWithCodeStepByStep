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
        return $data;
        /*====  returns an array of json data ====*/
        // return $data; 


        /*====  returns the data in tabular form ====*/
        /*  return view('ShowDataFromDB', ['members' => $data]); */

        /* ==== Filter ==== */
        /* return $data
        ->where('email', "effat@effat"); //returns all effat@effat=3 ids */


        /* ==== returns total number of data  ==== */
        // return $data->count(); 

        /*==== inserts data ====*/
        /*    return DB::table('members')
        ->insert(
        [
        "name" => "tonmoy",
        "email" => "tonmoy@tonmoy"
        ]
        ); */

        /*==== update data ====*/
        /*    return DB::table('members')
        ->where('id', 10)
        ->insert(
        [
        "name" => "tonmoy",
        "email" => "tonmoy@tonmoy"
        ]
        ); */

        /* ==== DELETE === */
        /*    return DB::table('members')
        ->where('id', 10) ->delete()
        */

    }

    /* aggregate */
    function aggregate()
    {
        /* ==== Returns all the data in members table ==== */
        // return DB::table('members')->get();

        /* ==== Returns the average of ids in members table ==== */
        // return DB::table('members')->avg(('id'));

        /* ==== Returns the sum of ids in members table ==== */
        // return DB::table('members')->sum(('id'));

        /* ==== Returns the max id in members table ==== */
        return DB::table('members')->max(('id'));

    }

    /* ==== JOIN tables ==== */
    function join()
    {
        $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
        return $users;
    }


}