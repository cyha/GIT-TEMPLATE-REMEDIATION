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
    return view('welcome');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/cards', function () {
    return view('cards');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('login');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/utilities-animation', function () {
    return view('utilities-animation');
});

Route::get('/utilities-border', function () {
    return view('utilities-border');
});

Route::get('/utilities-other', function () {
    return view('utilities-other');
});

Route::get('/utilities-color', function () {
    return view('utilities-color');
});
