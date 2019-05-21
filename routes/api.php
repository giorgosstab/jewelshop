<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$params = [
    'version' =>  env('API_VERSION'),
    'prefix' => 'api',
    'domain' => env('APP_DOMAIN'),
    'namespace' => 'App\\Http\\Controllers\\API\\v1',
];
$api = app('Dingo\Api\Routing\Router');
$api->group($params, function ($api) {
    $api->group(['prefix' => 'v1'], function ($api) {
        $api->post('login', 'AuthenticateController@login');
        $api->post('logout', 'AuthenticateController@logout');
        $api->get('token', 'AuthenticateController@getToken');
        $api->group(['middleware' => 'api.auth'], function ($api) {
            $api->get('user', 'AuthenticateController@authenticatedUser');
            $api->get('user/{user}/details', 'AuthenticateController@show');
            $api->patch('user/{user}/details/update', 'AuthenticateController@updateDetails');
            $api->patch('user/{user}/password/update', 'AuthenticateController@updatePassword');
            $api->get('home', 'HomePageController@index');
            $api->get('products', 'ShopController@index');
            $api->get('product/{product}', 'ShopController@show');
            $api->get('blog/{blog}', 'BlogController@show');
            $api->get('user/{user}/wishlists', 'WishlistController@index');
            $api->delete('user/{user}/wishlist', 'WishlistController@destroy');
            $api->post('user/wishlist/create', 'WishlistController@store');
        });
    });
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
