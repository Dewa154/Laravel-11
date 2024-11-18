<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentController2;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DeviceController;

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\CheckEmailSubmission;




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// route::redirect('/home', '/');


// FrontEnd Routes
Route::view('/', 'welcome');
Route::view('/home', 'home')->middleware('check1');
Route::view('/home/profile/{name}', 'home')->name('user');

//Middleware
Route::middleware('check1')->group(function(){
    Route::prefix('student')->group(function(){
        Route::view('/home', 'home');
        Route::get('/studentlist', [HomeController::class, 'studentList']);
        Route::get('/addstudent', [HomeController::class, 'addStudent']);
    });
});



Route::prefix('student/india')->group(function(){
    Route::view('/home', 'home');
    Route::get('/studentlist', [HomeController::class, 'studentList']);
    Route::get('/addstudent', [HomeController::class, 'addStudent']);
});


//Multiple Middleware on the route.
Route::view('/user-form', 'user-form')->middleware([AgeCheck::class, CountryCheck::class]);
Route::view('/user-form-2', 'user-form-2');

// Route::get('/about/{name}', function ($name) {
//     // echo $name;
//     return view('about', ['name' => $name]);
// });


Route::controller(StudentController::class)->group(function(){
    Route::get('show', 'show');
    Route::get('add', 'add');
    Route::get('delete', 'delete');
    Route::get('about/{name}', 'about');
});



// BackEnd Routes
Route::get('user', [UserController::class, 'getUser']);
Route::get('about', [UserController::class, 'about'])->middleware('check1');
Route::get('about-user/{name}', [UserController::class, 'aboutUser']);
Route::get('user/{name}', [UserController::class, 'getUserName']);
Route::get('admin-login', [UserController::class, 'adminLogIn']);
Route::get('admin-signup', [UserController::class, 'adminSignUp']);
Route::get('user-home', [UserController::class, 'userHome']);

// Route::get('show', [HomeController::class, 'show']);
// Route::get('user', [HomeController::class, 'user']);


//Database Used This Routes
// Route::get('users', [UserController::class, 'users']);
// Route::get('users', [UserController::class, 'queries']);
Route::get('users', [UserController::class, 'queries2']);
Route::get('students', [StudentController::class, 'getStudents']);


// Route::get('user2', [UserController::class, 'get']);
// Route::post('user2', [UserController::class, 'post']);
// Route::put('user2', [UserController::class, 'put']);
// Route::patch('user2', [UserController::class, 'patch']);
// Route::delete('user2', [UserController::class, 'delete']);

//Route any & match function
// Route::any('user2', [UserController::class, 'any']);

Route::match(['post', 'get'], '/user2', [UserController::class, 'group1']);
Route::match(['patch', 'delete'], '/user2', [UserController::class, 'group2']);

Route::view('form', 'user2');


Route::post('user3', [UserController::class, 'login']);
Route::view('form3', 'user3');


Route::post('adduser', [UserController::class, 'addUser']);
Route::post('adduser2', [UserController::class, 'addUser2']);


//Laravel Session & Cookies
Route::view('login2', 'login');
Route::view('profile', 'profile');

Route::post('login2', [UserController::class, 'login2']);
Route::get('logout2', [UserController::class, 'logout2']);

// Data Pass direct on view.
Route::view('/contact/{name}', 'contact')->name('contact');


// Laravel Flash Session
Route::view('user4', 'user4');
Route::post('add', [UserController::class, 'addUser4']);


// Upload and Display File
Route::view('upload', 'upload');
Route::post('upload', [UploadController::class, 'upload']);

// Pdf Upload and Display
Route::view('pdfupload', 'pdfUpload');
Route::post('showPdf', [PdfController::class, 'pdfUpload']);

// Localization 
Route::view('welcome2', 'welcome2');
Route::view('about2', 'about2');

Route::get('welcome2/{lang}', function($lang){
    App::setLocale($lang);
    return view('welcome2');
});


//Localization Part-2
Route::middleware('SetLang')->group(function(){
    Route::get('/', function(){
        return view('welcome');
    });

    Route::view('welcome2', 'welcome2');
    Route::view('about2', 'about2');

    Route::get('setlang/{lang}', function($lang){
        Session::put('lang', $lang);
        return redirect()->back();
    });
    
});


Route::view('add', 'add-student2');
Route::post('added', [StudentController2::class, 'addStudent2']);

Route::get('student2-list', [StudentController2::class, 'listStudent2']);

Route::get('delete/{id}', [StudentController2::class, 'deleteStudent2']);

Route::get('edit/{id}', [StudentController2::class, 'editStudent2']);
Route::put('update-student2/{id}', [StudentController2::class, 'updateStudent2']);

Route::get('search-student2', [StudentController2::class, 'searchStudent2']);

Route::post('delete-multi', [StudentController2::class, 'deleteMultiple']);


Route::view('imageupload', 'imageUpload');

Route::post('uploadedimage', [ImageController::class, 'uploadedImage']);

Route::get('imagelist', [ImageController::class, 'imageList']);


Route::view('about3', 'about3');
Route::view('home3', 'home3');

Route::view('login3', 'login3');

Route::view('admin', 'admin');

Route::view('login4', 'login4');
Route::view('home4', 'home4');

Route::get('list', [MemberController::class, 'list']);
Route::get('save', [MemberController::class, 'save']);


Route::get('secondlist', [SellerController::class, 'secondList']);

Route::get('many-rel', [SellerController::class, 'manyRel']);

Route::get('many-to-one', [SellerController::class, 'manyToOne']);

Route::post('send-email', [MailController::class, 'sendEmail']);
Route::view('send-email', 'Email.send-email');


// Fluent String.
// $info = "hi, let's learn Laravel";
// $info = Str::ucfirst($info);
// $info = Str::replaceFirst("Hi", "Hello", $info);
// $info = Str::camel($info);

// $info = Str::of($info)
// ->ucfirst($info)
// ->replaceFirst("Hi", "Hello", $info)
// ->camel($info);
// echo $info;


Route::get('device/{key:name}', [DeviceController::class, 'index']);