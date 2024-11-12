<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PdfController extends Controller
{
    public function pdfUpload(Request $request)
    {
        // Validate the uploaded file
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:pdf|max:2048', // Adjust the validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Store the uploaded file
        $path = $request->file('file')->store('uploads');

        // Return the view to display the uploaded PDF
        return view('showPdf', ['path' => $path]);

    }
}