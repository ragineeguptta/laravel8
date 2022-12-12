<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggreegateController extends Controller
{
    function operations()
    {
        return DB::table('members')->sum('id');
    }
}
