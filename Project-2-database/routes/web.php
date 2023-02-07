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
Route::get("/delete/{id}", [memberController::class, 'deleteMember']);

/* Edit from database */
Route::get("/edit/{id}", [memberController::class, 'editMember']);
Route::post("/edit", [memberController::class, 'updateMember']);

/* Show data from db by query builder */
Route::get("ShowDataFromDB", [memberController::class, 'ShowDataFromDB']);

/* Aggregate */
Route::get('aggregate', [memberController::class, 'aggregate']);

/* Join */
Route::get('join', [memberController::class, 'join']);


/* One to one relation */
Route::get('getComapanyOfMember', [memberController::class, 'getComapanyOfMember']);

/* One to many relation */
Route::get('getOrders', [memberController::class, 'getOrders']);