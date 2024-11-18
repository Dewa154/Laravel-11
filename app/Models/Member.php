<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    public $timestamps = false;

    function getNameAttribute($val){
        return ucfirst($val);
    }

    function getPhoneAttribute($val){
        return "+91-".$val;
    }

    function setNameAttribute($val){
        // $this->attributes['name']="apple";
        $this->attributes['name']=ucfirst($val);
    }

    function setPhoneAttribute($val){
        $this->attributes['phone']= "+91-".$val;
    }
}
