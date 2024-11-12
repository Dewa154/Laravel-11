<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function upload(Request $request){
        // echo "upload function called";

        // $path = $request->file('file')->store('public');
        $path = $request->file('file')->storeAs('public', 'dummy1.jpg');
        $fileNameArray = explode("/", $path);
        $fileName = $fileNameArray[1];

        return view('display', ['path'=>$fileName]);
    }
}
