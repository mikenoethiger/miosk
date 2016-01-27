<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'PublicController@kiosk');
Route::get('/drinks', 'PublicController@drinks');
Route::get('/food', 'PublicController@food');
Route::post('/search', 'PublicController@search');
Route::get('/services', 'PublicController@services');

Route::resource('suggestion', 'SuggestionController',
    ['only' => ['store', 'destroy', 'update']]);

Route::resource('ranking', 'RankingController',
    ['only' => ['store']]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/member', function() {
        $products = \App\Product::all();
        $filter = "all";
        return view('member', compact('products', 'filter'));
        //return File::get(public_path() . '/member_app/index.html');
    });
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function()
{
    Route::get('/', 'AdminController@dashboard');
    Route::get('/suggestions', 'AdminController@suggestions');
    Route::get('/suggestions/marked', 'AdminController@markedSuggestions');
    Route::get('/suggestions/archived', 'AdminController@archivedSuggestions');
    Route::get('/ranking', 'AdminController@ranking');


    Route::resource('product', 'ProductController',
        ['only' => ['index', 'create', 'store', 'destroy', 'edit', 'update']]);
});

Route::group(['prefix' => 'api'], function()
{
    Route::resource('product', 'ProductApiController');
    Route::resource('order', 'OrderController');
    Route::post('/alarm', 'ApiController@alarm');
});