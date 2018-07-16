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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactsController@index')->name('contacts');

Route::get('/goods', 'GoodsController@index');

Route::get('/goods/create', 'GoodsController@create');

Route::get('/goods/{id}', 'GoodsController@view')->name('goods');

Route::get('/photos', 'GoodsController@index')->name('photos');

Route::get('/goods/create', 'GoodsController@create');


//Route::post('/goods', 'GoodsController@store')->name('create');
