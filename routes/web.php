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

Route::get('/', function () {
    return auth()->check() ? redirect()->route('wuphfs.featured') : redirect()->route('wuphfs.featured');
});

Route::get('/featured', 'PageController@index')->name('wuphfs.featured');
Route::get('/all', 'PageController@all')->name('wuphfs.all');

Auth::routes(['verify' => true]);

