<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $timestamps = false;

    public function seller(){
        return $this->belongsTo('App\Models\Seller');
    }
}
