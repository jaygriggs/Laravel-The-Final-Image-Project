<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{

public function index()
    {
          	$data=DB::table('pictures')->get();
        return view('api');

    

 
            
            

          
    }    



 /*
     * Extracts picture's data from DB and makes a url 
     */
    public function showApi($id)
    {
        $picture = Picture::findOrFail($id);
        $pic = Image::make($picture->pic);
        $response = Response::make($pic->encode('data-url'));

        //setting content-type
        $response->header('Content-Type', 'application/javascript');

        return $response;
    }




  }             
    





