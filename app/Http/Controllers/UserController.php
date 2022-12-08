<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function loadView()
    {
        $data=['Raag','Rohit','Amit','Vikas','Abhay'];
        return view("users",["users"=>$data]);

    }

    function getData(Request $req){
        return $req->input();
    }
}
