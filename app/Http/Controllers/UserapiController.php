<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserapiController extends Controller
{
    function index(){
        $data = Http::get("https://reqres.in/api/users?page=1");
        return view('usersapi',['collection'=>$data['data']]);
    }
}
