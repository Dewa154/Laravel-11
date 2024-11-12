<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;


class UserController extends Controller
{
    //
    function getUser(){
        // return "Dewanand Kurrey";
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('user', ['data'=>json_decode($response)]);
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
        'city' =>'required | max:20 | uppercase',
        'skills' =>'required',
      ], [
        'username.required' => 'Username can not be empty',
        'username.min' => 'Username min characters should be 3',
        'email.email' => 'This email is not valid',
        'city.uppercase' => 'City Name should be Uppercase',
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

    function users(){
      $users = DB::select('select * from users');
      return view('users', ['users' => $users]);
    }

    function queries(){
      $result = DB::table('users')->get();
      // $result = DB::table('users')->where('phone', '9755636060')->get();
      // $result = DB::table('users')->first();
      // $result = [$result];


      //Data Insert
      // $result = DB::table('users')->insert([
      //   'name' => 'tony',
      //   'email' => 'tony@gmail.com',
      //   'password' => '12345678',
      //   'phone' => '9755636666',
      // ]);
      // if ($result) {
      //    return "Data inserted";
      // } else {
      //    return "Data not inserted";
      // }

      // if ($result) {
      //    return "Data inserted";
      // } else {
      //    return "Data not inserted";
      // }


      //Data Update
      // $result = DB::table('users')->where('name', 'tony')->update(['phone'=>'2222']);

      // if ($result) {
      //    return "Data updated";
      // } else {
      //    return "Data not updated";
      // }


      //Data Delete
      // $result = DB::table('users')->where('name', 'tony')->delete();

      // if ($result) {
      //    return "Data deleted";
      // } else {
      //    return "Data not deleted";
      // }


      return view('users', ['users'=>$result]);
    }


    function queries2(){
      // $response = User::all();  // User::all(); === user::get(); === select * from table

      // $response = User::get();
      // $response = User::where('password', '123456')->get();
      // $response = User::where('password', '123456')->first();
      // $response = User::find(1);

      // $response = [$response];


      //Data Insert 
      // $response = User::insert([
      //   'name'=>'Ashok',
      //   'email'=>'ashok@gmail.com',
      //   'password'=>'12345678',
      //   'phone'=>'7024089955',
      // ]);

      // if ($response) {
      //    return "Data inserted";
      // } else {
      //    return "Data not inserted";
      // }

      //Data Update
      // $response = User::where('name', 'rocky')->update(['email'=>'rocky11@gmail.com']);

      // if ($response) {
      //    return "Data updated";
      // } else {
      //    return "Data not updated";
      // }


      //Data Delete
      $response = User::where('name', 'rocky')->delete();

      if ($response) {
         return "Data deleted";
      } else {
         return "Data not deleted";
      }

      // return view('users', ['users'=> $response]);
    }


    // function get(Request $req){
    //   return $req;
    // }

    function get(){
      return "Get Route Method";
    }

    function post(){
      return "Post Route Method";
    }

    function put(){
      return "Put Route Method";
    }

    function patch(){
      return "Patch Route Method";
    }

    function delete(){
      return "Delete Route Method";
    }

    function any(){
      return "Any Route Method";
    }

    function group1(){
      return "This is group 1";
    }

    function group2(){
      return "This is group 2";
    }

    function login(Request $request){
      // return $request;
      echo "Request method is ".$request->method();
      echo "<br><br>";
      echo "Request path is ".$request->path();
      echo "<br><br>";
      echo "Request url is ".$request->url();
      echo "<br><br>";
      echo "Request name is ".$request->input('name');
      echo "<br><br>";
      echo "Request password is ".$request->input('password');
      echo "<br><br><br>";
      echo "Your Request Name : ".$request->name." & Password :".$request->password;
      echo "<br><br>";

      print_r($request->input());   // Data in Array Form 
      echo "<br><br>";
      print_r($request->collect());

      echo "<br><br>";
      if ($request->isMethod('post')) {
        echo "execute code for post request";
      } else {
        echo "execute code for other request";
      }

      echo "<br><br>";
      if ($request->is('user3')) {
        echo "Execute code for user3 path";
      } else {
        echo "Execute code for other path";
      }

      echo "<br><br>";
      echo "Your IP is : ".$request->ip();

    }

    function login2(Request $request){
      // return $request->input();
      // $request->session()->put('username', $request->input('username'));
      // echo session('username');

      $request->session()->put('allData', $request->input());
      return redirect('profile');
    }

    function logout2(){
      // session()->forget('username');    // forget === pull
      // session()->pull('username');

      session()->pull('allData');
      return redirect('login2');
    }

    function addUser4(Request $request){
      // Your DB Code
      $request->session()->flash('message', 'User has been added successfully');
      "<br><br>";
      $request->session()->flash('username', 'Username : '.$request->username);
      return redirect('user4');
    }
}
    


