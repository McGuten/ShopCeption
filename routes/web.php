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
    return view('welcome');
});

Route::get('settings', 'HomeController@settings');

Route::get('form', 'HomeController@form');

Route::post('edit', 'HomeController@edit');

Route::post('additems', 'HomeController@additems');

Route::get('tienda/{tienda}/items', 'ShopController@tienda');

Route::get('tienda/{tienda}', 'ShopController@home');

Route::get('tienda/{tienda}/datos', 'ShopController@datos');

Route::post('tienda/add', 'ShopController@add');

Route::get('creartiendanueva', 'ShopController@nueva');

Route::get('ajax', 'ShopController@ajax');

Auth::routes();