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

Route::get('/', 'TaskController@index')->name('index');
Route::get('/edit/{id}', 'TaskController@edit')->name('edit');
Route::put('/edit/{id}/update', 'TaskController@update')->name('update');
Route::get('/delete/{id}', 'TaskController@delete')->name('delete');
Route::get('/create', 'TaskController@create')->name('create');
Route::post('/create', 'TaskController@store')->name('store');

