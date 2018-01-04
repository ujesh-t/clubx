<?php

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
    return view('index');
});

Route::get('about-us', function(){
    return view('about-us');
});

Route::get('reservation', function(){
    return view('reservation');
});

Route::get('events','EventController@getAllEvents');
Route::get('/pay','PaymentController@payment');