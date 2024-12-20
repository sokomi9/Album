<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    function upload(Request $request){
        $path = $request->file('file')->store('public');
        $pathArray = explode('/',$path);
        $imagePath = $pathArray[1];

        $image = new Image();
        $image->path = $imagePath;
        if ($image->save()) {
           return redirect('list');
        }else{
            echo "Image upload failed";
        }

    }
    function list(){
        $imageData = Image::all();
        return view('display', ['imageData'=>$imageData]);
    }
}
