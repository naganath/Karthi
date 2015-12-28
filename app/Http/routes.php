<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', 'MailController@sendMail');


Route::get('/aboutUs', function () {
    return view('AboutUs');
});


Route::get('/services', function () {
    return view('services');
});

Route::get('/products', function () {
    return view('products');
});


Route::get('/contactUs', function () {
    return view('contactus');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/*', function () {
    return view('index');
});


