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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/leakage/add/{zone_id}', 'HomeController@add')->name('leakage.add');
Route::post('/leakage/save', 'HomeController@save')->name('leakage.save');
Route::post('/leakage/update', 'HomeController@update')->name('leakage.update');
Route::get('/leakage/delete/{id}', 'HomeController@delete')->name('leakage.delete');
Route::get('/leakage/export', 'HomeController@export')->name('leakage.export');
