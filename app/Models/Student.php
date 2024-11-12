<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // If Database Table Name another => students to college_students
    // protected $table = 'college_students';

    function testFunc(){
        echo "This is dummy Function";
    }
}
