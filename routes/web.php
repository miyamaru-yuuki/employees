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

Route::get('/', 'DepartmentController@index');
Route::get('showemployees/{did}', 'DepartmentController@showemployees');

Route::post('/add', 'DepartmentController@add');
Route::post('/henkoukanryou', 'DepartmentController@henkoukanryou');
Route::post('/delkanryou', 'DepartmentController@delkanryou');