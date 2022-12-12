<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinsController extends Controller
{
    function getData(){
        return DB::table('employee')
        ->join('company', 'employee.companyId','=','company.id')
        ->get();
    }
}
