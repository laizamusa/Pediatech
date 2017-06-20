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
//    return view('main');
    return view('pages.home');
});

Route::get('/about', function (){
    return view('pages.aboutus');
});

Route::get('/tech', function (){
    return view('pages.technologies');
});

Route::get('/org', function (){
    return view('pages.organization');
});

Route::get('/contact', function (){
    return view('pages.contact');
});

Route::get('/tech/technologies/eztab', function (){
    return view('technologies/eztab');
});

Route::get('/tech/technologies/suredose', function (){
    return view('technologies/suredose');
});


Route::post('/mailsender', 'MailController@mailer');