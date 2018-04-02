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
    return view('templates/welcomedefault');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list', 'DasboardController@index')->name('index');
Route::get('/create', 'DasboardController@create')->name('create');
Route::post('/create', 'DasboardController@store')->name('store');
Route::get('/{post}/edit', 'DasboardController@edit')->name('edit');
Route::patch('/{post}/edit', 'DasboardController@update')->name('update');
Route::delete('/{post}/delete', 'DasboardController@destroy')->name('destroy');

Route::get('/category/list', 'CategoryController@index')->name('category.index');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/create', 'CategoryController@store')->name('category.store');
Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::patch('/category/{id}/edit', 'CategoryController@update')->name('category.update');
Route::delete('/category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');
