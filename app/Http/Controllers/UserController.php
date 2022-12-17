<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
    
    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }
}
