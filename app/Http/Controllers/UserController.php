<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    // function loadView()
    // {
    //     $data=['Raag','Rohit','Amit','Vikas','Abhay'];
    //     return view("users",["users"=>$data]);

    // }

    // function getData(Request $req)
    // {
    //     $req->validate([
    //         'username'=>'required | max:10',
    //         'password'=>'required | min:5'
    //     ]);
    //     return $req->input();
    // }

    // function index(){
    //     return DB::select("select * from users");
    // }

    function getData(){
        return User::all();
    }
}
