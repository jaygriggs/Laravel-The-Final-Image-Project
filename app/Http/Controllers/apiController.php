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

class apiController extends Controller
{
  public function showPictureapi()
    {
        $api = Picture::all();
        return view('api')->with('pictures', $api);
    }

    public function showPicture($id)
    {
        $api = Picture::findOrFail($id);
        $pic = Image::make($api->pic);
        $response = Response::make($pic->encode('jpeg'));
        $response->header('Content-Type', 'image/jpeg');
        return $response;
    }  //
}
