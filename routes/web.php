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

Route::get('/', 'ListsController@index');
Route::get('/createlist', 'ListsController@create');
Route::get('/getlist/{id}', 'ListsController@get');
Route::get('/deletelist', 'ListsController@delete');


