<?php

use Illuminate\Http\Request;

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
        $api->post('authenticate', 'AuthenticateController@authenticate');
        $api->post('logout', 'AuthenticateController@logout');
        $api->get('token', 'AuthenticateController@getToken');
        $api->group(['middleware' => 'api.auth'], function ($api) {
            $api->get('user', 'AuthenticateController@authenticatedUser');
            $api->get('popular-products', 'HomePageController@popularProducts');
            $api->get('popular-blog-posts', 'HomePageController@popularBlogPosts');
            $api->get('parent-categories', 'HomePageController@parentCategories');
        });
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
