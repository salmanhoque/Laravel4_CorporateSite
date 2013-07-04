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


/**
* These routes for non-admin users so no authentication needed
*
*/
Route::get('/', array('uses' => 'Non_adminsController@index')); 
Route::get('/page/{slug}', array('uses' => 'Non_adminsController@show'));

/**
* These routes for admin users to log into the adminpanel
* These also includes logout routes as well
*/
Route::get('/admins',array('as'=>'admins','uses' =>'AdminsController@index'));
Route::put('/admins/login',array('uses' =>'AdminsController@login'));
Route::get('/admins/logout',array('uses' =>'AdminsController@logOut'));
	 
/**
* RESTful routes for the adminpanel
* A is filter used to check the users privilege  
*/	 
Route::group(['before' => 'auth'], function() {
	Route::resource('posts', 'PostsController');  
	Route::resource('assets', 'AssetsController',
				array('except' => array('show','edit','update',)));     
});




