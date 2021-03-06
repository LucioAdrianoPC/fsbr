<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'API\CRUDTestController@list')->name('inicial');
//Route::get('/', 'API\CRUDTestController@add')->name('add');
//Route::get('coworking/{coworking}/unidade','UnitController@index')->name('admin.unit.index');