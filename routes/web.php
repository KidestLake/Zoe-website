<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('User/addArtist', [UserController::class, 'index']);



Route::get('/awtar', function () {
    return view('FrontEnd.awtar');
});
Route::get('/contact', function () {
    return view('FrontEnd.contact');
});
Route::get('/', function () {
    return view('FrontEnd.home');
});
Route::get('/about', function () {
    return view('FrontEnd.about');
});
Route::get('/mostDownload', function () {
    return view('FrontEnd.mostDownload');
});
Route::get('/video', function () {
    return view('FrontEnd.video');
});
Route::get('/artist', function () {
    return view('FrontEnd.artistRegistration');
});
// Route::get('/','TemplatesController@index' );



// Route::get('User/registerArtist', 'UserController@registerArtist');
// Route::post('User/addArtist', 'UserController@addArtist');