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
Route::get('products/filter', 'ProductController@filter')->name('products.filter');
Route::resource('products', 'ProductController');
Route::resource('contact', 'ContactController');
Route::resource('news', 'NewsController');
Route::resource('cart', 'CartController')->only(['index', 'store', 'update', 'destroy']);
Route::resource('checkout', 'CheckoutController')->only(['index', 'store', 'update', 'destroy']);


Route::prefix('admin')->namespace('Back')->group(function () {
    Route::name('admin')->get('/', 'AdminController@index');
    Route::resource('backbrands', 'BrandController')->except('show');
    Route::resource('backproducts', 'ProductController')->except('show');
    Route::resource('backnews', 'NewsController')->except('show');

});

Auth::routes(['register' => false,]);

Route::get('/home', 'HomeController@index')->name('home');
