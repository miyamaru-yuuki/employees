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
Route::get('henkou/{did}', 'DepartmentController@henkou');
Route::get('delkakunin/{did}', 'DepartmentController@delkakunin');

Route::get('employeesdelkakunin/{eid}', 'EmployeesController@delkakunin');
Route::get('employeeshenkou/{eid}', 'EmployeesController@henkou');


Route::post('/addkakunin', 'DepartmentController@addkakunin');
Route::post('/addkanryou', 'DepartmentController@addkanryou');
Route::post('/henkoukanryou', 'DepartmentController@henkoukanryou');
Route::post('/delkanryou', 'DepartmentController@delkanryou');
Route::get('/ekensaku', 'DepartmentController@ekensaku');

Route::post('/employeesaddkakunin', 'EmployeesController@addkakunin');
Route::post('/employeesaddkanryou', 'EmployeesController@addkanryou');
Route::post('/employeeshenkoukanryou', 'EmployeesController@henkoukanryou');
Route::post('/employeesdelkanryou', 'EmployeesController@delkanryou');

INSERT INTO Certification (cname) VALUES ("英検2級");
INSERT INTO Certification (cname) VALUES ("電検3種");
INSERT INTO Certification (cname) VALUES ("電検2種");