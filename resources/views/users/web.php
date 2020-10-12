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

/* 
Route::get('/đường dẫn', function () {
    return view('users.trang vừa tạo');
});
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('', function () {
    return view('users.home');
});
Route::get('about', function () {
    return view('users.about');
});
Route::get('synthesis', function () {
    return view('users.synthesis');
});
Route::get('nectar-intothetrees', function () {
    return view('users.nectar-intothetrees');
});