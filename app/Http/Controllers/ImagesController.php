<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class ImagesController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function uploadImg(Request $request)
    {
        
        $imgFile = $request->photo;
        if($imgFile!=Null){
            $image = $request->file('photo');
            $filename  = time().'.'. $request->photo->extension();
            $img_resize = Image::make($image->getRealPath());
            $img_resize->fit(250);
            $img_resize->save(public_path($filename));
            echo "<img src='".$filename."'>";
        }
    }
}
