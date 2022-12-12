<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    function companyData(){
        return $this->hasOne('App\Models\Employee');
    }
    function manyData(){
        return $this->hasMany('App\Models\Employee');
    }
}
