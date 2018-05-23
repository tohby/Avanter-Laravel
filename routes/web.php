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
Auth::routes();
Route::get('/', 'PagesController@index');
Route::resource('/buy', 'BuyController@create');
Route::resource('pages', 'PagesController');
Route::resource('products', 'ProductsController');
Route::resource('orders', 'OrdersController');