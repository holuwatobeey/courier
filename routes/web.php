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

Auth::routes();
Route::get('clear_cache', function () {

    \Artisan::call('cache:clear');

    dd("Cache is cleared");

});
Route::get('clear_config', function () {

    \Artisan::call('config:clear');

    dd("Config is cleared");

});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services-portfolio', 'PagesController@who')->name('who');
Route::get('/schedule', 'PagesController@schedule')->name('schedule');
// Route::post('/schedule', 'ScheduleController@schedule')->name('schedule');
Route::post('/schedule', 'ScheduleController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'ScheduleController@callback')->name('callback');
Route::get('/careers', 'PagesController@careers')->name('careers');
Route::get('/contact-us', 'PagesController@contact')->name('contact');
Route::post('/contact-us', 'PagesController@saveContact');
Route::get('/terms', 'PagesController@terms')->name('terms');
Route::get('/pricing', 'PagesController@pricing')->name('pricing');
// Route::post('/contact-us', 'PagesController@contactFunc')->name('contactFunc');
