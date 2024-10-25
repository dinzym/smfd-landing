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

Route::fallback(function () {
    return redirect('/');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/terminate', function () {
    return view('terminate');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/verification', function () {
    return view('verification');
});

Route::get('/create/password', function () {
    return view('passwordform');
});

Route::get('/reset/password', function () {
    return view('resetpasswordform');
});