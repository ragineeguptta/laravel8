<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::view('about','/about');
Route::view("contact","/contact");

// Route::get('user/{id}',[UserController::class,'show']);
// Route::get("users",[UserController::class,'loadView']);
// Route::post("users",[UserController::class,'getData']);

// Route::view("noaccess","noaccess");
// Route::view("home","home")->middleware('protectedPage');

// Route::group(['middleware'=>['protectPage']],function(){
//     Route::view('users','users');
// });

 Route::get("users",[UserController::class,'index']);