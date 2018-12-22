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

Route::get('/', 'HomePageController@home')->name('home');
Route::get('gallery', 'HomePageController@gallery');
Route::get('places', 'HomePageController@places');
Route::get('booking', 'HomePageController@booking');
Route::get('tour', 'HomePageController@tour');
Route::get('short-trekking', 'HomePageController@shortTrekking');
Route::get('long-trekking', 'HomePageController@longTrekking');
Route::get('about', 'HomePageController@about');
Route::get('contact', 'HomePageController@createContact');
Route::post('contact', 'HomePageController@storeContact');

Route::get('admin', 'AdminController@getLoginForm')->name('login');
Route::post('login', 'AdminController@login');
Route::get('logout', 'AdminController@logout');
Route::get('messages','AdminController@getMessages');
Route::delete('message-delete/{id}', 'AdminController@deleteMessage')->name('contact.destroy');

Route::resource('posts', 'PostController')->middleware('admin');

Route::resource('categories', 'CategoryController')->middleware('admin');