<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class AccessorsController extends Controller
{
    //
    function index(){
        $member = new Member;
        $member->name="Raag";
        $member->email="bruce@dg.rer";
        $member->address="Mumbai";
        $member->save();
    }
}
