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
//Route::get('/novo', view('inclusao'));


Route::get('/novo', function () {
    return view('inclusao');
});

Route::post('/inclusao', 'API\CRUDTestController@add')->name('inclusao');

Route::get('/alteracao', function () {
    return view('alteracao');
});

Route::post('/alteracao', 'API\CRUDTestController@edite')->name('alteracao');


Route::get('/exclusao', function () {
    return view('exclusao');
});

Route::post('/exclusao', 'API\CRUDTestController@exclusao')->name('exclusao');
