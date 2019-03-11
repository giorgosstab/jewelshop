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

Route::get('/checkout-user','CheckoutController@index')->name('shop.checkout.index')->middleware('auth');
Route::get('/checkout-guest','CheckoutController@guest')->name('shop.checkout.guest');
Route::post('/checkout','CheckoutController@store')->name('shop.checkout.store');

Route::post('/coupon','CouponsController@store')->name('shop.coupons.store');
Route::delete('/coupon','CouponsController@destroy')->name('shop.coupons.destroy');

Route::get('/order/{order}','OrderController@show')->name('shop.order.show');;

Route::get('/search','SearchController@show')->name('shop.search.show');

Route::get('/about','AboutController@index')->name('shop.about.index');
Route::get('/blog','BlogController@index')->name('shop.blog.index');
Route::get('/blog/in','BlogController@show')->name('shop.blog.show');
Route::get('/thankyou','ConfirmationController@index')->name('shop.checkout.confirm');
Route::get('/terms','TermsController@index')->name('shop.privacy.index');

Route::get('/contact','ContactController@index')->name('shop.contact.index');
Route::post('/contact','ContactController@store')->name('shop.contact.store');

Route::post('/newsletter','NewsletterController@mailChimp')->name('shop.newsletter.mailChimp');

Route::get('empty', function(){
    Cart::destroy();
});

Route::get('emptySaves', function(){
    Cart::instance('saveForLater')->destroy();
});

View::composer(['*'], function($view) {
    $subcategories = new App\CategoryJewel;

    try {
        $allSubCategories = $subcategories->getCategories();
    } catch (Exception $e) {
        //no parent category found
    }
    $mainCategoryName = optional($subcategories->where('slug', request()->sub)->first())->name;
    $view->with([
        'allSubCategories' => $allSubCategories,
        'mainCategoryName' => $mainCategoryName,
    ]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');
Route::get('auth/activate/resend', 'Auth\ActivationController@showResendForm')->name('auth.activate.showResendForm');
Route::post('auth/activate/resend', 'Auth\ActivationController@resend')->name('auth.activate.resend');

Route::get('{slug}', [
    'uses' => 'PagesController@getPage'
])->where('slug', '([A-Za-z0-9\-\/]+)');
