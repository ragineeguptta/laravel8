<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    function index(Request $req){
        $result = $req->file('file')->store('apiDocs');
        return ['result' =>$result];
    }
}
