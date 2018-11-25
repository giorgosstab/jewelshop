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

use App\CategoryJewel;

Route::get('/','HomePageController@index')->name('shop.home.index');

Route::get('/shop','ShopController@index')->name('shop.products.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.products.show');

Route::get('/cart','CartController@index')->name('shop.shopping-cart.index');
Route::post('/cart','CartController@store')->name('shop.shopping-cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('shop.shopping-cart.destroy');
Route::patch('/cart/{product}','CartController@update')->name('shop.shopping-cart.update');
Route::post('/cart/saveForLater/{product}','CartController@saveForLater')->name('shop.shopping-cart.saveForLater');

Route::delete('/saveForLater/{product}','SaveForLaterController@destroy')->name('shop.shopping-cart.destroyForLater');
Route::post('/saveForLater/switchToCart/{product}','SaveForLaterController@switchToCart')->name('shop.shopping-cart.switchToCart');

Route::get('/checkout','CheckoutController@index')->name('shop.checkout.index');
Route::post('/checkout','CheckoutController@store')->name('shop.checkout.store');

Route::get('/thankyou','ConfirmationController@index')->name('shop.checkout.confirm');
Route::get('/terms','TermsController@index')->name('shop.privacy.index');

Route::get('empty', function(){
    Cart::destroy();
});

Route::get('emptySaves', function(){
    Cart::instance('saveForLater')->destroy();
});

View::composer(['*'], function($view) {
    $subcategories = new CategoryJewel;

    try {
        $allSubCategories = $subcategories->getCategories();
    } catch (Exception $e) {
        //no parent category found
    }
    $view->with('allSubCategories', $allSubCategories);
});
