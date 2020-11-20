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
Route::get('kiti', function () {
    return view('users.kiti');
});
Route::get('qt-bamboo.qt-bamboo-about',function(){
    return view('users.qt-bamboo.qt-bamboo-about');
});
Route::get('qt-bamboo.qt-bamboo-contact',function(){
    return view('users.qt-bamboo.qt-bamboo-contact');
});
Route::get('qt-bamboo.product.bamboo-cup',function(){
    return view('users.qt-bamboo.product.bamboo-cup');
});
Route::get('qt-bamboo.product.bamboo-straw',function(){
    return view('users.qt-bamboo.product.bamboo-straw');
});
Route::get('qt-bamboo.product.bamoo-pen',function(){
    return view('users.qt-bamboo.product.bamoo-pen');
});
Route::get('qt-bamboo.product.bamo-spoon',function(){
    return view('users.qt-bamboo.product.bamo-spoon');
});
Route::get('the-mountains',function(){
    return view('users.the-mountains');
});