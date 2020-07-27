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
Route::get('/', function () {
    return view('homepage');
});

//Cart
Route::get('cart', 'CartController@showCart');

//Login & register
Route::resource('user', 'UserController');


//List Products
Route::resource('listProducts','ListProductController');

//Hats
Route::resource('hats','HatController');

//Jacket
Route::resource('jacket','JacketController');

//Men
Route::resource('men','MenController');

//Women
Route::resource('women','WomenController');

//Sneaker
Route::resource('sneaker','SneakerController');

//Details Product
Route::resource('detail','DetailsController');
