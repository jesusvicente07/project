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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'usersController@users')->name('users');

Route::get('users/add', 'usersController@create')->name('create');

Route::post('users/add', 'usersController@store')->name('store');

Route::get('users/edit/{user}', 'usersController@edit')->name('edit');

Route::post('users/edit/{user}', 'usersController@update')->name('update');

Route::delete('users/delete/{user}', 'usersController@delete')->name('delete');

