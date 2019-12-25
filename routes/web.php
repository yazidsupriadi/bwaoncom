<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');

Route::get('/detail','DetailController@index');
Route::get('/checkout','CheckoutController@index');
Route::get('/checkout/success','CheckoutController@success');

Route::prefix('admin')
	->namespace('Admin')
	->group(function ()
	{
		Route::get('/','DashboardController@index');	
	});



