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

Route::get('/', 'MainController@index')->name('main');

Route::get('/team', 'MainController@team')->name('team');

Route::get('/contact-us', 'MainController@contact')->name('contact');
Route::post('/contact-us', 'MainController@postContact');

Route::get('/news', 'NewsController@index')->name('news');

Route::get('/papers', 'PapersController@index')->name('papers');

Route::get('/gallery', 'GalleryController@index')->name('gallery');

Auth::routes();

// Admin routes
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/paper', 'AdminController@paper')->name('admin.paper');
Route::post('/admin/paper', 'AdminController@paperSave');

Route::get('/admin/picture', 'AdminController@picture')->name('admin.picture');
Route::post('/admin/picture', 'AdminController@pictureSave');

Route::get('/admin/news', 'AdminController@news')->name('admin.news');
