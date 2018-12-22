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
})->name('home');

Route::get('admin', 'AdminController@getLoginForm')->name('login');
Route::post('login', 'AdminController@login');
Route::get('logout', 'AdminController@logout');

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');
Route::post('contact/delete/{id}', 'ContactController@delete')->name('contact.delete');
Route::get('messages', 'ContactController@list')->middleware('admin');

Route::get('about', 'AboutController@index');

Route::resource('posts', 'PostController')->middleware('admin');

Route::resource('categories', 'CategoryController')->middleware('admin');