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
Route::post('/shop','CartController@addToCart')->name('shop.shopping-cart.addToCart');
Route::delete('/cart/{product}','CartController@destroy')->name('shop.shopping-cart.destroy');
Route::patch('/cart/{product}','CartController@update')->name('shop.shopping-cart.update');
Route::post('/cart/saveForLater/{product}','CartController@saveForLater')->name('shop.shopping-cart.saveForLater');

Route::delete('/saveForLater/{product}','SaveForLaterController@destroy')->name('shop.shopping-cart.destroyForLater');
Route::post('/saveForLater/switchToCart/{product}','SaveForLaterController@switchToCart')->name('shop.shopping-cart.switchToCart');

Route::get('/checkout-user','CheckoutController@index')->name('shop.checkout.index')->middleware('auth');
Route::get('/checkout-guest','CheckoutController@guest')->name('shop.checkout.guest');
Route::post('/checkout','CheckoutController@store')->name('shop.checkout.store');
Route::get('/thankyou','ConfirmationController@index')->name('shop.checkout.confirm');

Route::post('/coupon','CouponsController@store')->name('shop.coupons.store');
Route::delete('/coupon','CouponsController@destroy')->name('shop.coupons.destroy');

Route::get('/order/{order}','OrderController@show')->name('shop.order.show');;

Route::get('/search','SearchController@show')->name('shop.search.show');

Route::get('/blog','BlogController@index')->name('shop.blog.index');
Route::get('/blog/{post}','BlogController@show')->name('shop.blog.show');
Route::post('/comments/{blog_post}','CommentController@store')->name('shop.comment.store');
Route::post('/reply/{comment_id}','CommentController@reply')->name('shop.comment.reply');
Route::delete('/delete/comment/{comment}','CommentController@destroy')->name('shop.comment.destroy');
Route::delete('/delete/reply/{reply}','CommentController@destroyReply')->name('shop.comment.destroyReply');


Route::get('/contact','ContactController@index')->name('shop.contact.index');
Route::post('/contact','ContactController@store')->name('shop.contact.store');

Route::post('/newsletter','NewsletterController@mailChimp')->name('shop.newsletter.mailChimp');

Route::middleware('auth')->group(function (){
    Route::post('/rating/{product}','RatingController@store')->name('shop.rating.store');

    Route::get('/customer-profile','ProfileController@index')->name('shop.profile.index');
    Route::patch('/update-password','ProfileController@updatePassword')->name('shop.profile.updatePassword');
    Route::patch('/update-details','ProfileController@updateDetails')->name('shop.profile.updateDetails');
    Route::patch('/update-addresses','ProfileController@updateAddresses')->name('shop.profile.updateAddresses');
    Route::get('/customer-order/{order}','OrderController@customerShow')->name('shop.order.customerShow');
    Route::get('/customer-rate/{rating}','RatingController@edit')->name('shop.rating.edit');
    Route::post('/customer-rate/{rating}','RatingController@update')->name('shop.rating.update');
    Route::post('/wishlist','WishlistController@store')->name('shop.wishlist.store');
    Route::delete('/wishlist/{product}','WishlistController@destroy')->name('shop.wishlist.destroy');
//    Route::get('/customer-rates','ProfileController@getRates')->name('shop.rates.getRates');
});

Route::get('empty', function(){
    Cart::destroy();
});

Route::get('emptySaves', function(){
    Cart::instance('saveForLater')->destroy();
});

//View::composer(['*'], function($view) {
//    $categoriesWithSubs = \App\CategoryJewel::where('status', 'like', 'PUBLISHED')->with('children')->whereHas('children', function($query){
//        $query->where('status', 'like', 'PUBLISHED');
//    })->get();
//    $view->with([
//        'categoriesWithSubs' => $categoriesWithSubs,
//    ]);
//});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();


    Route::group(['middleware' => 'admin.user'], function () {
        Route::get('themes', ['uses' => 'ThemesController@index', 'as' => 'theme.index']);
        Route::get('themes/activate/{theme}', ['uses' => 'ThemesController@activate', 'as' => 'theme.activate']);
        Route::get('themes/deactivate/{theme}', ['uses' => 'ThemesController@deactivate', 'as' => 'theme.deactivate']);
        Route::get('themes/options/{theme}', ['uses' => 'ThemesController@options', 'as' => 'theme.options']);
        Route::post('themes/options/{theme}', ['uses' => 'ThemesController@options_save', 'as' => 'theme.options.post']);
        Route::get('themes/options', function () {
            return redirect(route('theme.index'));
        });
        Route::get('themes/activate', function () {
            return redirect(route('theme.index'));
        });
        Route::get('themes/deactivate', function () {
            return redirect(route('theme.index'));
        });
        Route::delete('themes/delete', ['uses' => 'ThemesController@delete', 'as' => 'theme.delete']);
    });


    // Menu Routes
    Route::group([
        'middleware' => 'admin.user',
        'as'     => 'voyager.menus.',
        'prefix' => 'menus/{menu}',
    ], function () {
        Route::get('builder', ['uses' => 'Voyager\MenusController@builder',    'as' => 'builder']);
    });

});

Auth::routes();

Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');
Route::get('auth/activate/resend', 'Auth\ActivationController@showResendForm')->name('auth.activate.showResendForm');
Route::post('auth/activate/resend', 'Auth\ActivationController@resend')->name('auth.activate.resend');

Route::get('{slug}', [
    'uses' => 'PagesController@getPage'
])->where('slug', '([A-Za-z0-9-]+)')->name('shop.pages.getPage');
//])->where('slug', '([A-Za-z0-9\-\/]+)')->name('shop.pages.getPage');

