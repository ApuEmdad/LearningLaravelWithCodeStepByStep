<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $request)
    {
        // return "hello from controller";
        return $request->file('file')->store('photos');
    }
}