<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps=false;
      // Accessor
    function getNameAttribute($value){
        return ucfirst($value);
    }
    function getAddressAttribute($value){
        return $value.", india";
    }

    //mutator
    public function setNameAttribute($value){
        return $this->attributes['name']= 'Ms. '.$value;
    }
    public function setAddressAttribute($value){
        return $this->attributes['address']= $value .', India';
    }
}
