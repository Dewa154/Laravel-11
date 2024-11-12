<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    function show(){
        return redirect()->to('home/profile/user');
    }

    // function user(){
    //     return to_route('user', ["name"=>"anil"]);
    // }

    function studentList(){
        return "Student List";
    }

    function addStudent(){
        return "add new student";
    }
}