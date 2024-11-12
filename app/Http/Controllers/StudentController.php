<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function show(){
        return "list of students";
    }

    function add(){
        return "New student added";
    }

    function delete(){
        return "student deleted";
    }

    function about($name){
        return "Hello $name";
    }

    // function getStudents(){
    //     $students = DB::select('select * from students');
    //     return view('students', ['students' => $students]);
    // }

    function getStudents(){
        $data = new \App\Models\Student;
        echo $data->testFunc();

        $students = \App\Models\Student::all();
        return view('students', ['data' => $students]);
    }
}
