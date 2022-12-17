<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\UserController;
use App\Http\Controllers\deviceAPIController;
use App\Http\Controllers\APIResourceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    // return $request->user();
// });
Route::group(['middleware' => 'auth:sanctum'], function (){

    Route::get("data",[dummyAPI::class,'index']);
});
// Route::get("device",[deviceAPIController::class,'index']);
Route::get("device/{id?}",[deviceAPIController::class,'list']);
Route::post("add",[deviceAPIController::class,'add']);
Route::put("update",[deviceAPIController::class,'update']);
Route::delete("delete/{id}",[deviceAPIController::class,'deletedevice']);
Route::get("search/{string}",[deviceAPIController::class,'search']);
Route::post("validate",[deviceAPIController::class,'testvalidate']);

Route::post("login",[UserController::class,'index']);


Route::apiResource("apiWithResource",APIResourceController::class);