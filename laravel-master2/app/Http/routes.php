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

Route::get('/', function()
{
	return View::make('pages.index');
});

Route::get('/aboutus', function(){

	return View::make('pages.aboutus');
});

Route::get('/submit-order', function(){

	return View::make('pages.submit-order');
});

Route::get('/shop/selectedCategory/{item}', 'ShopItemsController@selectedCategory');
Route::resource('/shop', 'ShopItemsController');