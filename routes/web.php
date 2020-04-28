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

Route::get('/', 'HomeController@index')->name('home.index');
Route::resource('brands', 'BrandController');
Route::resource('products', 'ProductController');
Route::get('products/filter', 'ProductController@index')->name('products.filter');
Route::resource('contact', 'ContactController');
Route::resource('news', 'NewsController');
Route::resource('cart', 'CartController');
