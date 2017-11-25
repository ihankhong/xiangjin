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
Route::get('news/article', 'NewController@article')->name('news.article');
Route::get('rddesign', 'RdDesignController@index')->name('rddesign');
Route::get('product', 'ProductController@index')->name('product');
Route::get('product/single', 'ProductController@single')->name('product.single');
Route::get('download', 'DownloadController@index')->name('download');
Route::get('contact', 'ContactController@index')->name('contact');