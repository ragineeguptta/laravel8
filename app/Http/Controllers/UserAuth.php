<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userLogin(Request $req)
    {
          $data = $req->input('username');
          $req->session()->put('username',$data);
          return redirect('profile');
    }
}
