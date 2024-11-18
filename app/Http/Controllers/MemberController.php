<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
     //
    function list(){
        return Member::all();
    }

    function save(){
        $member = new Member();
        $member->name = "sam";
        $member->email = "samuls@example.com";
        $member->address = "5566 Main St";
        $member->phone = "1555562656";
        $member->save();

        if ($member->save()) {
            echo "new student added";
        }
    }
}
