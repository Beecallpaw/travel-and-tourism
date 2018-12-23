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
Route::get('gallery', 'HomePageController@gallery')->name('gallery');
Route::get('places', 'HomePageController@places')->name('places');
Route::get('booking', 'HomePageController@booking')->name('booking');
Route::get('about', 'HomePageController@about')->name('about');
Route::get('contact', 'HomePageController@createContact')->name('contact');
Route::post('contact', 'HomePageController@storeContact');
Route::get('packages/{slug}', 'HomePageController@getCategory')->name('category');

Route::get('admin', 'AdminController@getLoginForm')->name('login');
Route::post('login', 'AdminController@login');
Route::get('logout', 'AdminController@logout');
Route::get('messages','AdminController@getMessages');
Route::delete('message-delete/{id}', 'AdminController@deleteMessage')->name('contact.destroy');

Route::resource('posts', 'PostController')->except(['edit'])->middleware('admin');
Route::get('posts/{slug}/edit','PostController@edit')->name('posts.edit');
Route::resource('categories', 'CategoryController')->middleware('admin');

