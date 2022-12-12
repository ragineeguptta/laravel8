<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;

class deviceController extends Controller
{
    //
    function index(Device $key){
        return $key;
    }
}
