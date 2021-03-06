<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Authentication Routes
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Registration Routes
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Categories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

// Tags
Route::resource('tags', 'TagController', ['except' => ['create']]);

// Comments
Route::post('comments/{post_id}', ['as' => 'comments.store', 'uses' => 'CommentController@store']);
Route::get('comments/{id}/edit', ['as' => 'comments.edit', 'uses' => 'CommentController@edit']);
Route::put('comments/{id}', ['as' => 'comments.update', 'uses' => 'CommentController@update']);
Route::delete('comments/{id}', ['as' => 'comments.destroy', 'uses' => 'CommentController@destroy']);
Route::get('comments/{id}/delete', ['as' => 'comments.delete', 'uses' => 'CommentController@delete']);

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
    ->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);
Route::get('contact', 'PageController@getContact');
Route::post('contact', 'PageController@postContact');
Route::get('about', 'PageController@getAbout');
Route::get('/', 'PageController@getIndex');

Route::resource('posts', 'PostController');
