<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\device;

class deviceAPIController extends Controller
{
    //
    // function index(){
    //      return device::all();
    // }

    function list($id=null){
        return $id?device::find($id):device::all();
   }
}
