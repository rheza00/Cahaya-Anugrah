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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/akun', function () {
    return view('akun');
});

Route::get('/belanja', function () {
    return view('belanja');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/pencarian', function () {
    return view('pencarian');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/masuk', function () {
    return view('masuk');
});