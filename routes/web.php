<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserapiController;
use App\Http\Controllers\UserformController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AggreegateController;
use App\Http\Controllers\JoinsController;
use App\Http\Controllers\AccessorsController;
use App\Http\Controllers\OnetooneController;
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

//  Route::get("users",[UserController::class,'index']);
Route::get("users",[UserController::class,'getData']);
Route::get("usersapi",[UserapiController::class,'index']);

Route::delete("usersform",[UserformController::class,'testRequest']);

Route::view("loginform",'usersform');

// Route::view("login",'login');
Route::view("profile",'profile');
Route::post("userlogin",[UserAuth::class,'userLogin']);

Route::get('/logout', function ()
{
    if(session()->has('username'))
    {
        session()->pull('username',null);
    }
    return redirect('login');
});

Route::get('/login', function ()
{
    if(session()->has('username'))
    {
        return redirect('profile');
    }
    return view('login');
});

Route::view('store','storeuser');

Route::post('storecontroller',[StoreController::class,'storeM']);

Route::view('upload','upload');
Route::post('upload',[UploadController::class,'index']);


Route::get('/localizedprofile/{lang}',function ($lang)
{
    App::setlocale($lang);
    return view('localizedprofile');
});

Route::get('list',[MemberController::class,'show']);
Route::view('add','addmember');
Route::post("add",[MemberController::class,'addData']);
Route::get("delete/{id}",[MemberController::class,'delete']);
Route::get("edit/{id}",[MemberController::class,'showData']);
Route::post("edit",[MemberController::class,'update']);

Route::get('Aggreegatelist',[AggreegateController::class,'operations']);
Route::get('joins',[JoinsController::class,'getData']);
Route::get('accessor',[AccessorsController::class,'index']);

Route::get('Onetoone',[OnetooneController::class,'index']);