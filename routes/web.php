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

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/who-we-serve', 'PagesController@who')->name('who');
Route::get('/schedule', 'PagesController@schedule')->name('schedule');
Route::get('/careers', 'PagesController@careers')->name('careers');
Route::get('/contact-us', 'PagesController@contact')->name('contact');
// Route::post('/contact-us', 'PagesController@contactFunc')->name('contactFunc');
