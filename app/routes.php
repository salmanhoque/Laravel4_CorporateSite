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
Route::get('/page/{slug}', array('uses' => 'Non_adminsController@show'));

Route::get('/admins',array('as'=>'admins','uses' =>'AdminsController@index'));
Route::put('/admins/login',array('uses' =>'AdminsController@login'));
	 

Route::resource('posts', 'PostsController');
