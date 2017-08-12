<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Image;

class PictureController2 extends Controller
{
     public function showPictureList2()
    {
        $pictures2 = Picture::all();
        return view('picturelist2')->with('pictures', $pictures2);
    }

    public function showPicture($id)
    {
        $picture = Picture::findOrFail($id);
        $pic = Image::make($picture->pic);
        $response = Response::make($pic->encode('jpeg'));

     
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
}
