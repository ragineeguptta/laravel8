<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Second;

class SecondController extends Controller
{
    //
    function index(){
        return Second::all();
        //return User::all();
        //return DB::table('users')->get();
        //return DB::connection('sqlsrv2')->table('seconds')->get();
    }
}
