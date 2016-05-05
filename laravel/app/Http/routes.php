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

	return View::make('pages.vegetables');
});
Route::get('/fruits', function(){

	return View::make('pages.fruits');
});
Route::get('/meat', function(){

	return View::make('pages.meat');
});
Route::get('/goods', function(){

	return View::make('pages.goods');
});
Route::get('/rice', function(){

	return View::make('pages.rice');
});
Route::get('/otherservices', function(){

	return View::make('pages.otherservices');
});
/**Shop menu**/