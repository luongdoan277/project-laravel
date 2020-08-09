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
Route::get('/','API\HomeController@index')->name('home');
//Login and Register
Route::get('/login','API\CustomerController@getLogin')->name('getlogin');
Route::get('/register','API\CustomerController@getRegister')->name('getregister');
Route::post('login', 'API\LoginRegisterController@login')->name('postLogin');
Route::post('register', 'API\LoginRegisterController@register')->name('postRegister');
Route::get('logout', 'API\LoginRegisterController@logout')->name('logout');
//Cart
Route::get('/checkout', 'API\CartController@getCheckout')->name('checkout');
Route::get('/add-to-cart/{id}', 'API\CartController@addToCart');
Route::get('/deleteItem/{id}', 'API\CartController@deleteItem');
Route::get('/deleteItemList/{id}', 'API\CartController@deleteListItem');
Route::get('/saveItemList/{id}/{qty}', 'API\CartController@saveListItem');
Route::get('/review-order', 'API\CartController@address')->name('review-order');
Route::get('/review','API\OrderController@createOrder')->name('createOrder');
//Product
Route::resource('product','API\ProductController');
//Category
Route::resource('category','API\CategoryController');


