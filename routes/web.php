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
    return view('welcome');
});

Route::group(['prefix' => 'todos'], function () {
    Route::get('index', 'TodoController@index')->name('todos.index');
    Route::get('create', 'TodoController@create')->name('todos.create');
    Route::post('store', 'TodoController@store')->name('todos.store');
    Route::get('show/{id}', 'TodoController@show')->name('todos.show');
    Route::get('edit/{id}', 'TodoController@edit')->name('todos.edit');
    Route::post('update/{id}', 'TodoController@update')->name('todos.update');
    Route::post('destroy/{id}', 'TodoController@destroy')->name('todos.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
