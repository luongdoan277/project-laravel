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
Route::get('/',function (){
    return view('homepage');
});
Route::get('product', 'Product@index');
Route::get('/cart','CartController@showCart');


Route::get('women',function (){
    return view('women');
});

Route::get('/men',function (){
    return view('men');
});

Route::get('sneaker',function (){
    return view('sneaker');
});

Route::get('/jacket',function (){
    return view('jacket');
});

Route::get('/hats',function (){
    return view('hats');
});

Route::get('/listproduct',function (){
    return view('listproduct');
});

Route::get('cart',function (){
   return view('Cart/cart');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/details', function () {
    return view('productdetails');
});

Route::get('/register', function () {
    return view('register');
});

