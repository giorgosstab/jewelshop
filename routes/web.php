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

Route::get('/','HomePageController@index')->name('shop.home.index');

Route::get('/shop','ShopController@index')->name('shop.products.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.products.show');

Route::get('/cart','CartController@index')->name('shop.shopping-cart.index');
Route::post('/cart','CartController@store')->name('shop.shopping-cart.store');
