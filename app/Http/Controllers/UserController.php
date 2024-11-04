<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    //
    function getUser(){
        // return "Dewanand Kurrey";
        return view('user');
    }

    function about(){
       return view('about');
    }

    function aboutUser($name){
        // return "I am a software developer";
        return view('aboutUser', ['user' => $name]);
    }

    function getUserName($name) {
        $capitalized_name = ucwords(strtolower($name)); // Capitalize the first letter of each word
        // return "Software Developer: $capitalized_name";
        return view('getuser', ['name' => $capitalized_name]);
    }

    function adminLogIn(){
       if (View::exists('admin.login')) {
         return view('admin.login');
       } else {
         return "View not found";
       }
    }

    function adminSignUp(){
       if (View::exists('admin.signup')) {
         return view('admin.signup');
       } else {
         return "View not found";
       }
    }

    function userHome(){
       $name = 'anil';
       $users = ['anil', 'sam', 'peter'];
      return view('userhome', ["user" => $name, "users" => $users]);
    }

   
}
