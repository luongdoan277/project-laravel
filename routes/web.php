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
Route::get('test', function (){
    return view('pages.mailorderdetail');
});
//Home Page
Route::get('/','API\HomeController@index');
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
//Order
Route::get('/review-order', 'API\CartController@address')->name('review-order');
Route::get('/review','API\OrderController@createOrder')->name('createOrder');
Route::get('/searchOrder','API\OrderController@getSearchOrder')->name('searchOrder');
Route::get('/order-detail', 'API\OrderController@SearchOrder')->name('order-detail');
//Product
Route::resource('product','API\ProductController');
//Category
Route::resource('category','API\CategoryController');
Route::get('chart','HightChartController@index');

//----------------------------admin----------------------------------//
//product list
Route::get('product-admin','PageController@index');

//Edit Product
Route::get('products','ProductAdminController@index');
Route::get('/delete/{id}','ProductAdminController@destroy');
Route::resource('product','ProductAdminController');
Route::put('/update/{id}','ProductAdminController@update');


//Login and Register admin

//view
Route::get('get-register','AdminController@getRegister');
Route::get('get-login','AdminController@getLogin');
//method
Route::post('login-admin','AdminController@postLogin');
Route::post('/register-admin','AdminController@postRegister');
Route::get('logout-admin','AdminController@logout');

//order
Route::get('order','OrderAdminController@index');
Route::get('orderDetails','OrderAdminController@orderDetails');
