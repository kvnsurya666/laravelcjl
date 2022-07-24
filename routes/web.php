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
    return view('home');
});

Route::get('/mesin', function () {
    return view('mesin');
});

Route::get('/oli', function () {
    return view('oli');
});

Route::get('/aksesoris', function () {
    return view('aksesoris');
});

Route::get('/jasa', function () {
    return view('jasa');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});