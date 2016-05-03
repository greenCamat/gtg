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

Route::get('/', [
	'as' => '/', 
	'uses' => 'PagesController@getIndex'
	]);

Route::get('shop', [
	'as' => 'shop', 
	'uses' => 'PagesController@getShop'
	]);

Route::get('sale', [
	'as' => 'sale', 
	'uses' => 'PagesController@getSale'
	]);

Route::get('mywallet', [
	'as' => 'mywallet', 
	'uses' => 'PagesController@getMywallet'
	]);

Route::get('ourpackages', [
	'as' => 'ourpackages', 
	'uses' => 'PagesController@getOurpackages'
	]);

Route::get('contact', [
	'as' => 'contact', 
	'uses' => 'PagesController@getShop'
	]);
