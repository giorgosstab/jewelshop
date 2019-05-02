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
    'version' => 'v1',
    'prefix' => 'api',
    'domain' => env('APP_DOMAIN'),
    'namespace' => 'App\\Http\\Controllers\\Api',
];
$api = app('Dingo\Api\Routing\Router');
$api->group($params, function ($api) {
    $api->get('popular-products', 'HomePageController@popularProducts');
    $api->get('popular-blog-posts', 'HomePageController@popularBlogPosts');
    $api->get('parent-categories', 'HomePageController@parentCategories');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
