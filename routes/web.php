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

Route::get('/', 'TaskController@index');
Route::get('/edit/{id}', 'TaskController@edit');
Route::put('/edit/{id}/update', 'TaskController@update');
Route::get('/delete/{id}', 'TaskController@delete');
Route::get('/create', 'TaskController@create');
Route::post('/create/{post}', 'TaskController@store');
