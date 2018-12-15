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

Route::get('/admin', 'AdminController@getLoginForm');
Route::post('/admin', 'AdminController@login');

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');
Route::post('/contact/delete/{id}', 'ContactController@delete')->name('contact.delete');
Route::get('/messages', 'ContactController@list');

Route::resource('post', 'PostController');
