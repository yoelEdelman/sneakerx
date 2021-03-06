<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('home', 'Api\HomeController@index');
Route::resource('brands', 'Api\BrandController')->only('index', 'show');
Route::get('products/filter', 'Api\ProductController@filter')->name('products.filter');
Route::resource('products', 'Api\ProductController')->only('index', 'show');
Route::resource('news', 'Api\NewsController')->only('index', 'show');
Route::resource('contact', 'Api\ContactController');



