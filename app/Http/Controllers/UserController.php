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

    function addUser(Request $request){
      
      $request->validate([
        'username' => 'required | min: 3 | max: 15',
        'email' => 'required | email',
        'city' =>'required | max:20',
        'skills' =>'required',
      ], [
        'username.required' => 'Username can not be empty',
        'username.min' => 'Username min characters should be 3',
        'email.email' => 'This email is not valid',
      ]);

      return $request;
    }

    function addUser2(Request $request){
      // return $request;
      print_r ($request->skill);
      echo "<br> $request->gender ";
      echo "<br> $request->city ";
      echo "<br> $request->age ";
    }
}

