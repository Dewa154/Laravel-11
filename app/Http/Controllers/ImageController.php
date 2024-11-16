<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //

    function uploadedImage(Request $request){
        $path = $request->file('file')->store('public');
        $pathArray = explode("/", $path);
        $imgPath = $pathArray[1];
        $img = new Image();
        $img->path = $imgPath;

        $img->save();
        if ($img->save()) {
           return redirect('imagelist');
        } else {
           return "Image Upload Failed";
        }
    }

    function imageList(){
        $images = Image::all();
        return view('imageDisplay', ['imgData'=>$images]);
    }
}
