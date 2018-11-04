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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomePageController@index')->name('shop.home.main');

Route::get('/shop','ShopController@index')->name('shop.products.main');
Route::get('/shop/{product}','ShopController@show')->name('shop.products.details');

Route::get('/cart','CartController@index')->name('shop.shopping-cart.main');
