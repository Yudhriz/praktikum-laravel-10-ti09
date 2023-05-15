<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});

Route::get('/hallo', function () {
    return view('hallo');
});

Route::get('/hallo2', function () {
    return view('hallo.halloworld');
});

Route::get('/kabar', function(){
    return view('kondisi');
});

Route::get('/nilai', function(){
    return view('nilai');
});
