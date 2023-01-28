<?php

use App\Http\Controllers\AddMemberController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserAuthController;
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

/* getting users from jsonplaceholder */
Route::get("/api-users", [UsersController::class, 'viewApiUsers']);

/* session */
Route::view('login', 'loginForm');
Route::post('login', [UserAuthController::class, 'login']);
Route::view('profile', 'profile');

//clearing the session storage
Route::get('/logOut', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('login');
});

/* session flash */
Route::view('addMember', 'AddMember');
Route::post("addMember", [AddMemberController::class, 'addMember']);


/* file upload */
Route::view('upload', 'upload');
Route::post('upload', [UploadController::class, 'upload']);
