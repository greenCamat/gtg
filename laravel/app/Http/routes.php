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

Route::resource('contactus/getContactsData', 'ContactusController@getContactsData');
Route::resource('contactus', 'ContactusController');


/**Items menu**/

Route::resource('vegetables/getVegetablesItem', 'VegetablesController@getVegetablesItem');
Route::resource('vegetables', 'VegetablesController');

Route::resource('fruits/getFruitsitem', 'FruitsController@getFruitsitem');
Route::resource('fruits', 'FruitsController');

Route::get('meat-fish/getMeatfishitem', 'MeatfishController@getMeatfishitem');
Route::resource('meat-fish', 'MeatfishController');

Route::get('instant-food/getInstantfooditem', 'InstantfoodController@getInstantfooditem');
Route::resource('instant-food', 'InstantfoodController');

Route::get('condiments/getCondimentsitem', 'CondimentsController@getCondimentsitem');
Route::resource('condiments', 'CondimentsController');

Route::get('dairy/getDairyitem', 'DairyController@getDairyitem');
Route::resource('dairy', 'DairyController');

Route::get('rice/getRiceitem', 'RiceController@getRiceitem');
Route::resource('rice', 'RiceController');

Route::get('chips-snacks/getChipnsnacksitem', 'ChipnsnacksController@getChipnsnacksitem');
Route::resource('chips-snacks', 'ChipnsnacksController');

Route::get('beverages/getBeveragesitem', 'BeveragesController@getBeveragesitem');
Route::resource('beverages', 'BeveragesController');

Route::get('supplies/getSuppliesitem', 'SuppliesController@getSuppliesitem');
Route::resource('supplies', 'SuppliesController');

Route::get('toiletries/getToiletriesitem', 'ToiletriesController@getToiletriesitem');
Route::resource('toiletries', 'ToiletriesController');

Route::get('otherservices/getOtherservicesitem', 'OtherservicesController@getOtherservicesitem');
Route::resource('otherservices', 'OtherservicesController');

/**Items menu**/


Route::get('/admin', function(){

	return View::make('pages.admin');
});
