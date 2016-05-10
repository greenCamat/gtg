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


Route::get('/shop', function(){

	return View::make('pages.shop');
});

/**Shop menu**/
Route::get('/vegetables', function(){

	//return View::make('items.vegetables');
	return View::make('items.vegies');
});

Route::get('vegies-info', 'VegiesController@index');

Route::get('/fruits', function(){

	return View::make('items.fruits');
});
Route::get('/meat', function(){

	return View::make('items.meat');
});
Route::get('/goods', function(){

	return View::make('items.goods');
});
Route::get('/rice', function(){

	return View::make('items.rice');
});
Route::get('/otherservices', function(){

	return View::make('items.otherservices');
});
/**Shop menu**/