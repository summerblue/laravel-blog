<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PostsController@index');
Route::get('about', ['as' => 'about', 'uses' => 'PostsController@index']);

// Confide routes
Route::get('signup', ['as' => 'signup', 'uses' => 'UsersController@create']);
Route::post('users', 'UsersController@store');
Route::get('login', ['as' => 'login', 'uses' => 'UsersController@login']);
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('logout', ['as' => 'logout', 'uses' => 'UsersController@logout']);


Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController');
