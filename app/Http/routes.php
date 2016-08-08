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

Route::auth();

Route::get('/home', 'PostController@allPosts');
Route::get('/posts/{id}', 'PostController@allPosts');
Route::get('/author/{id}', 'AuthorController@singlePost');

