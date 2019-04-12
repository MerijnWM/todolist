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
Route::post('/insertlist', 'ListsController@insert');
Route::get('/getlist/{id}', 'ListsController@get');
Route::post('/editlist', 'ListsController@edit');
Route::get('/viewlist/{id}', 'ListsController@view')->name('viewlist');
Route::get('/deletelist/{id}', 'ListsController@delete');

Route::get('/createtask/{list_id}', 'TasksController@create');
Route::post('/inserttask', 'TasksController@insert');
Route::get('/gettask/{id}', 'TasksController@get');
Route::post('/edittask', 'TasksController@edit');
Route::get('/deletetask/{id}', 'TasksController@delete');
Route::get('/filterDescription/{value}/{id}', 'TasksController@filterDescription');
Route::get('/filterStatus/{value}/{id}', 'TasksController@filterStatus');

