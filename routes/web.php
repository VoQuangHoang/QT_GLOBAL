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
Route::get('contact', function () {
    return view('users.contact');
});
Route::get('Career-opportunity', function () {
    return view('users.Career-opportunity');
});
Route::get('nectar-advertisement', function () {
    return view('users.Nectar');
});
Route::get('summer-vaver', function () {
    return view('users.Summer-vaver');
});
Route::get('the-journey', function () {
    return view('users.the-journey');
});
Route::get('every-morning', function () {
    return view('users.every-morning');
});
