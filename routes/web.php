<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about us', function () {
    return view('about%20us');
});

Route::get('API', function () {
    return view('API');
});

Route::get('list', 'PictureController@showPictureList');
Route::get('pic/{id}', 'PictureController@showPicture');
Route::get('add', 'PictureController@addPicture');
Route::post('add', 'PictureController@savePicture');
Route::get('api', 'apiController@showPictureapi');
Route::get('pic2/{id}', 'apiController@showPicture2');