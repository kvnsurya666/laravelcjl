<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('beranda');
});

Route::get('/admin', function () {
    return view('/admin/login');
});

Route::get('/admin/home', function () {
    return view('/admin/home');
});

Route::get('/mesin', function () {
    return view('mesin');
});

Route::get('/machinetool', function () {
    return view('machinetool');
});

Route::get('/aksesoris', function () {
    return view('aksesoris');
});

Route::get('/cuttingtool', function () {
    return view('cuttingtool');
});

Route::get('/measuringtool', function () {
    return view('measuringtool');
});

Route::get('/handtool', function () {
    return view('handtool');
});

Route::get('/cuttingcoolant', function () {
    return view('cuttingcoolant');
});

Route::get('/abrasive', function () {
    return view('abrasive');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
