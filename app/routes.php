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

Event::listen('Artees.Registration.Events.UserRegistered', 
	function ($event)
{
	//dd('user has Registered');
});

/**
*HOME Page
*/
Route::get('/', [
	'as'=>'home',
	'uses'=>'PagesController@home'
]);

/**
*Registration Form
*/
Route::get('register', [
	'as'=>'register_path', 
	'uses'=>'RegistrationController@create'
]);


/**
*Store Registration Data
*/

Route::post('register', [
	'as'=>'register_path', 
	'uses'=>'RegistrationController@store'
]);



/**
* Sessions
*/
Route::get('login', [
	'as'=>'login_path', 
	'uses'=>'SessionsController@create'
]);

Route::post('login', [
	'as'=>'login_path', 
	'uses'=>'SessionsController@store'
]);


/**
* Statuses
*/
Route::get('statuses', [
	'as'=>'statuses_path', 
	'uses'=>'StatusesController@index'
]);

Route::post('statuses', [
	'as'=>'statuses_path', 
	'uses'=>'StatusesController@store'
]);



/**
* Logout
*/
Route::get('logout', [
	'as'=>'logout_path', 
	'uses'=>'SessionsController@destroy'
]);
