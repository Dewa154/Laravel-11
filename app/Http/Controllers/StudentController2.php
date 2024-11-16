<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student2;
use Illuminate\Support\Facades\Validator;

class StudentController2 extends Controller
{
    public function addStudent2(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:student2s,email', // Ensure the email is unique
            'phone' => 'required|string|max:30', // Assuming phone is also required
        ]);

        if ($validator->fails()) {
            return "This Email Id : $request->email is already added!"; // Return validation errors
        }

        // Create a new student record
        $student = new Student2();
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->save();

        if ($request) {
            return redirect('student2-list');
        } else {
            return "Error adding student";
        }
    }

    function listStudent2(){
        // $studentData = Student2::all();
        $studentData = Student2::paginate(4);

        return view('list-student2', ['student2s' => $studentData]);
    }

    function deleteStudent2($id){
        $isDeleted = Student2::destroy($id);
        if ($isDeleted) {
            return redirect('student2-list');
        }
    }

    function editStudent2($id){
        $studentData = Student2::find($id);
        return view('edit-student2', ['data' => $studentData]);
    }

    function updateStudent2(Request $request, $id){
        $studentData = Student2::find($id);
        $studentData->name = $request->input('name');
        $studentData->email = $request->input('email');
        $studentData->phone = $request->input('phone');

        $studentData->save();

        if ($studentData->save()) {
            return redirect('student2-list');
        } else {
            return "Update Operation Failed";
        }
    }

    function searchStudent2(Request $request){

       $studentData = Student2::where('name', 'like', "%$request->search%")->get();
       return view('list-student2', ['student2s' => $studentData, 'search'=>$request->search]);

    }

    function deleteMultiple(Request $request){
        $result = Student2::destroy([$request->ids]);
        if ($result) {
            return redirect('student2-list');
        } else {
            return "Error deleting students";
        }
    }
}