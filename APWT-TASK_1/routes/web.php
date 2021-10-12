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


Route::get('/', function () {
    return view('pages.home');
});
Route::get('/product', function () {
    return view('pages.product');
});
Route::get('/teams', function () {
    return view('pages.teams');
});
Route::get('/contact-us', function () {
    return view('pages.about');
});
Route::get('/about-us', function () {
    return view('pages.about');
});
Route::get('/service', function () {
    return view('pages.service');
});
