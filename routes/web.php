<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// route::redirect('/home', '/');


// FrontEnd Routes
Route::view('/home', 'home');
Route::view('/user-form', 'user-form');
Route::view('/user-form-2', 'user-form-2');

// Route::get('/about/{name}', function ($name) {
//     // echo $name;
//     return view('about', ['name' => $name]);
// });


// BackEnd Routes
Route::get('user', [UserController::class, 'getUser']);
Route::get('about', [UserController::class, 'about']);
Route::get('about-user/{name}', [UserController::class, 'aboutUser']);
Route::get('user/{name}', [UserController::class, 'getUserName']);
Route::get('admin-login', [UserController::class, 'adminLogIn']);
Route::get('admin-signup', [UserController::class, 'adminSignUp']);
Route::get('user-home', [UserController::class, 'userHome']);

Route::post('adduser', [UserController::class, 'addUser']);
Route::post('adduser2', [UserController::class, 'addUser2']);


// Data Pass direct on view.
Route::view('/contact/{name}', 'contact')->name('contact');