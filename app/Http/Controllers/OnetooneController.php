<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class OnetooneController extends Controller
{
    //
    function index(){
        return Company::find(1)->companyData;
    }
}
