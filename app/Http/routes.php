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

Route::get('/', 'PublicController@kiosk');

Route::resource('suggestion', 'SuggestionController',
    ['only' => ['store', 'destroy', 'update']]);

Route::resource('ranking', 'RankingController',
    ['only' => ['store']]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
    Route::get('/', 'AdminController@dashboard');
    Route::get('/suggestions', 'AdminController@suggestions');
    Route::get('/suggestions/marked', 'AdminController@markedSuggestions');
    Route::get('/suggestions/archived', 'AdminController@archivedSuggestions');
    Route::get('/ranking', 'AdminController@ranking');


    Route::resource('product', 'ProductController',
        ['only' => ['index', 'create', 'store', 'destroy', 'edit', 'update']]);
});