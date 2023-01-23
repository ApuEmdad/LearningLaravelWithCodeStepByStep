<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\UsersController;
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

Route::view('/', 'welcome');


/* blade */
Route::get("/blade", [UsersController::class, 'viewLoad']);
Route::get("/blade2", [UsersController::class, 'viewAllUsers']);

/* handle html form */
Route::get('/login', [loginController::class, 'viewLoginForm']);
Route::post('login', [loginController::class, 'getUser']);

/* middlewares */

/* global middleeare */
Route::view("players", "Players");
Route::view("playersHome", "PlayersHome");
Route::view("noaccess", "PlayersNoAccess");

/* group middleware */
Route::group(['middleware' => ['protectedPages']], function () {
    Route::view("players", "Players");
});

/* Route Middleware */
Route::view("players", "Players")->middleware('protectedRoute');

/* configuring database */
Route::get("/allusers", [UsersController::class, 'viewAllUsers']);