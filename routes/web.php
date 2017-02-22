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

Route::get('/', function () {
    return view('main');
});

Route::get('/products', 'ProductsController@index');
Route::get('/products/add', 'ProductsController@create');
Route::get('/products/{product}', 'ProductsController@show');
Route::post('/products', 'ProductsController@store');

Route::get('/orders', 'OrdersController@index');
Route::get('/orders/{product}', 'OrdersController@create');
Route::post('/orders', 'OrdersController@store');

Route::get('/pages', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/orders/success', function () {
    return view('orders.success');
});