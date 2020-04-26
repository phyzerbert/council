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

Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

Route::any('/home', 'HomeController@index')->name('home');
Route::get('/leakage/add/{zone_id}', 'HomeController@add')->name('leakage.add');
Route::post('/leakage/save', 'HomeController@save')->name('leakage.save');
Route::post('/leakage/update', 'HomeController@update')->name('leakage.update');
Route::get('/leakage/delete/{id}', 'HomeController@delete')->name('leakage.delete');
Route::get('/leakage/export', 'HomeController@export')->name('leakage.export');

Route::get('/mygreenway', 'IndexController@greenway')->name('greenway.index');

Route::any('/employee/index', 'EmployeeController@index')->name('employee.index');
Route::post('/employee/create', 'EmployeeController@create')->name('employee.create');
Route::post('/employee/update', 'EmployeeController@update')->name('employee.update');
Route::post('/employee/delete/{id}', 'EmployeeController@delete')->name('employee.delete');

Route::any('/timesheet/index', 'TimesheetController@index')->name('timesheet.index');
Route::post('/timesheet/create', 'TimesheetController@create')->name('timesheet.create');
Route::post('/timesheet/update', 'TimesheetController@update')->name('timesheet.update');
Route::post('/timesheet/delete/{id}', 'TimesheetController@delete')->name('timesheet.delete');