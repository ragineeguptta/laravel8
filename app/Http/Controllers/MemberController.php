<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    function show(){
       // $data = Member::all();
       $data = Member::paginate(2);
        return view('list',['members'=>$data]);
    }
}
