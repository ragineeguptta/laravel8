<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class AccessorsController extends Controller
{
    //
    function index(){
        return Member::all();
    }
}
