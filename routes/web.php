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
//Login and Register
Route::get('/login','API\CustomerController@getLogin')->name('getlogin');
Route::get('/register','API\CustomerController@getRegister')->name('getregister');
//Cart
Route::get('/checkout', 'API\CartController@getCheckout')->name('checkout');
Route::get('add-to-cart/{id}', 'API\CartController@addToCart');
Route::get('deleteItem/{id}', 'API\CartController@deleteItem');
Route::get('deleteItemList/{id}', 'API\CartController@deleteListItem');
//Product
Route::resource('product','API\ProductController');
//Category
Route::resource('category','API\CategoryController');


