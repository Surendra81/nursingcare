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
    return view('pages/home');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/contactus', function () {
    return view('pages/contact');
});
Route::get('/aboutus', function () {
    return view('pages/about');
});
Route::get('/client', function () {
    return view('pages/clients');
});
Route::get('/job', function () {
    return view('pages/jobs');
});
