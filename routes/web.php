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

Route::get('/contacts', 'ContactsController@index')->name('home');

Route::get('/goods', 'GoodsController@index');

Route::get('/goods/create', 'GoodsController@create');

Route::get('/goods/{id}', 'GoodsController@view')->name('goods');
Route::post('/goods', 'GoodsController@store');

Route::get('/photos', 'PhotosController@index');
Route::get('/photos/create', 'PhotosController@create');
Route::get('/photos/{id}', 'PhotosController@view');
Route::post('/photos', 'PhotosController@store');




Route::post('/admin/good', 'admin\GoodController@store');

Route::get('/admin/good', 'admin\GoodController@index');
Route::get('/admin/good/create', 'admin\GoodController@create');

Route::get('/admin/photo', 'admin\PhotoController@index');
Route::get('/admin/photo/create', 'admin\PhotoController@create');
Route::post('/admin/photo', 'admin\PhotoController@store');



