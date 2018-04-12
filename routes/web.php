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

Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('/tasks', 'TaskController@store')->name('tasks.store');
Route::get('/tasks/destroy/{id}', 'TaskController@destroy')->name('tasks.destroy');
Route::get('/tasks/edit/{id}', 'TaskController@edit')->name('tasks.edit');
Route::put('/tasks/update/{id}', 'TaskController@update')->name('tasks.update');