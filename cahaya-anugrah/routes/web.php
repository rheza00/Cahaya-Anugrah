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


Route::get('/pesanan', function () {
    return view('/login/pesanan');
});

Route::get('/produksaya', function () {
    return view('/login/produksaya');
});

Route::get('/statistik', function () {
    return view('/login/statistik');
});

Route::get('/tambahproduk', function () {
    return view('/login/tambahproduk');
});

// Route::get('/pencarian', function () {
//     return view('pencarian');
// });


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});





Route::get('/viewadmin', 'AdminsController@index');
Route::post('/viewadmin', 'BarangsController@store');






Route::get('/viewadmindelete/{barang}', 'BarangsController@show2');
Route::delete('/viewadmindelete/{barang}', 'BarangsController@destroy');
Route::get('/viewadmindelete/{barang}/editbarang', 'BarangsController@edit');
Route::patch('/viewadmindelete/{barang}', 'BarangsController@update');


Route::get('/pencarian', 'BarangsController@index');
Route::get('/tambahbarang', 'BarangsController@create');




Route::get('/info/{barang}', 'BarangsController@show');





