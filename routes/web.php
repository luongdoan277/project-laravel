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
//Home Page
Route::get('/','API\HomeController@index');
Route::get('/login','API\CustomerController@getLogin')->name('getlogin');
Route::get('/register','API\CustomerController@getRegister')->name('getregister');
Route::get('add-to-cart/{id}', 'API\CartController@addToCart');
Route::resource('product','API\ProductController');
Route::resource('category','API\CategoryController');


