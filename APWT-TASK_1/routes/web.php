<?php

use Illuminate\Support\Facades\Route;

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





Route::get('/home', function () {
    return view('pages.home');
});


Route::get('/product', function () {
    return view('pages.product');
});
Route::get('/teams', function () {
    return view('pages.teams');
});
Route::get('/contact-us', function () {
    return view('pages.contact');
});
Route::get('/about-us', function () {
    return view('pages.about');
});
Route::get('/service', function () {

    $service = array(
        array(
            'icon' => 'fa fa-laptop',
            'sevice_name1' => 'Android Apps',
            'sevice_name2' => 'Development',

        ),
        array(
            'icon' => 'fa fa-paint-brush',
            'sevice_name1' => 'Graphic',
            'sevice_name2' => 'Design',

        ),

        array(
            'icon' => 'fa fa-wifi',
            'sevice_name1' => 'Website Design &',
            'sevice_name2' => 'Development',

        ),

    );

    $data = array('services' => $service);


    return view('pages.service')->with($data);
});
