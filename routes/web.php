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
    return view('dashboard');
});

Route::get('/task', 'TaskController@index')->name('task');
Route::get('/task/create', 'TaskController@create')->name('task.create');
Route::post('/task', 'TaskController@store')->name('task.store');
Route::get('/task/destroy/{id}', 'TaskController@destroy')->name('task.destroy');
Route::get('/task/edit/{id}', 'TaskController@edit')->name('task.edit');
Route::put('/task/update/{id}', 'TaskController@update')->name('task.update');