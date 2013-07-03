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

Route::get('/', array('uses' => 'Non_adminsController@index')); 
Route::get('/{{ $slug }}', array('uses' => 'Non_adminsController@show')); 

Route::resource('posts', 'PostsController');

Route::resource('admins', 'AdminsController');
