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

Route::get('/contactus', function(){

	return View::make('pages.contactus');
});


/**Items menu**/

Route::resource('vegetables/getVegetablesItem', 'VegetablesController@getVegetablesItem');
Route::resource('vegetables', 'VegetablesController');

Route::resource('fruits/getFruitsitem', 'FruitsController@getFruitsitem');
Route::resource('fruits', 'FruitsController');

Route::get('meat-fish/getMeatfishitem', 'MeatfishController@getMeatfishitem');
Route::resource('meat-fish', 'MeatfishController');

Route::get('instant-food/getInstantfooditem', 'InstantfoodController@getInstantfooditem');
Route::resource('instant-food', 'InstantfoodController');

/**Items menu**/


/**Route::get('/fruits', function(){

	return View::make('items.fruits');
});
Route::get('/meat-fish', function(){

	return View::make('items.meat-fish');
});
Route::get('/canned-instant-goods', function(){

	return View::make('items.canned-instant-goods');
});**/
Route::get('/rice', function(){

	return View::make('items.rice');
});
Route::get('/otherservices', function(){

	return View::make('items.otherservices');
});




Route::get('/admin', function(){

	return View::make('pages.admin');
});
