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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', 'AboutController@index')->name('about');
Route::get('news', 'NewController@index')->name('news');
Route::get('rddesign', 'RdDesignController@index')->name('rddesign');
Route::get('product', 'ProductController@index')->name('product');