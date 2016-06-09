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

Route::resource('contactus/getContactsData', 'ContactusController@getContactsData');
Route::resource('contactus', 'ContactusController');

/**For Submit order controller if needed**/

/**Route::resource('submit-order/getOrdersData', 'SubmitorderController@getOrdersData');  
Route::resource('submit-order', 'SubmitorderController');**/ 



/**Items menu**/
Route::get('/shop/selectedCategory/{item}', 'ShopItemsController@selectedCategory');
Route::resource('/shop', 'ShopItemsController');

Route::get('vegetables/getVegetablesItem', 'VegetablesController@getVegetablesItem');
// Route::resource('vegetables', 'VegetablesController');

Route::get('fruits/getFruitsitem', 'FruitsController@getFruitsitem');
Route::resource('fruits', 'FruitsController');

Route::get('meat-fish/getMeatfishitem', 'MeatfishController@getMeatfishitem');
Route::resource('meat-fish', 'MeatfishController');

Route::get('condiments/getCondimentsitem', 'CondimentsController@getCondimentsitem');
Route::resource('condiments', 'CondimentsController');

Route::get('dairy/getDairyitem', 'DairyController@getDairyitem');
Route::resource('dairy', 'DairyController');

Route::get('chips-snacks/getChipnsnacksitem', 'ChipnsnacksController@getChipnsnacksitem');
Route::resource('chips-snacks', 'ChipnsnacksController');

Route::get('instant-food/getInstantfooditem', 'InstantfoodController@getInstantfooditem');
Route::resource('instant-food', 'InstantfoodController');

Route::get('rice/getRiceitem', 'RiceController@getRiceitem');
Route::resource('rice', 'RiceController');

Route::get('supplies/getSuppliesitem', 'SuppliesController@getSuppliesitem');
Route::resource('supplies', 'SuppliesController');

Route::get('beverages/getBeveragesitem', 'BeveragesController@getBeveragesitem');
Route::resource('beverages', 'BeveragesController');

Route::get('toiletries/getToiletriesitem', 'ToiletriesController@getToiletriesitem');
Route::resource('toiletries', 'ToiletriesController');

Route::get('otherservices/getOtherservicesitem', 'OtherservicesController@getOtherservicesitem');
Route::resource('otherservices', 'OtherservicesController');

/**Items menu**/


Route::get('/admin', function(){

	return View::make('admin.admin');
});

Route::get('/admin/orders', function(){

	return View::make('admin.orders');
});

