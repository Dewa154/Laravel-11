<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    public $timestamps = false;

    function ProductData(){
        // return $this->hasOne('App\Models\Product', "owner_id");
        return $this->hasOne('App\Models\Product');
    }

    function ProductManyData(){
        // return $this->hasMany('App\Models\Product', 'owner_id');
        return $this->hasMany('App\Models\Product');
    }

}
