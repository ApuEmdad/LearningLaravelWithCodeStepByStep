<?php

use App\Http\Controllers\addMemberController;
use App\Http\Controllers\memberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/

Route::get('/', function () {
    return view('welcome');
});
/* pagination */
Route::get("/members", [memberController::class, 'showList']);

/* add to the database */
Route::view('addMember', 'addMember');
Route::post('addMember', [addMemberController::class, 'addMember']);

/* delete from database */
Route::delete("/delete/{id}", [memberController::class, 'deleteMember']);