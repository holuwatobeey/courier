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
Route::post('/track', 'PagesController@track')->name('track_parcel');

Auth::routes();
Route::get('clear_cache', function () {

    \Artisan::call('cache:clear');

    dd("Cache is cleared");

});
Route::get('clear_config', function () {

    \Artisan::call('config:clear');

    dd("Config is cleared");

});
Route::get('clear_view', function () {

    \Artisan::call('view:clear');

    dd("View is cleared");

});

Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('auth');
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
Route::get('/track', 'PagesController@viewtrack')->name('track');


Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');
Route::post('/profile/edit', 'ProfileController@edit')->name('edit');
Route::post('/profile/changePassword','ProfileController@edit')->name('changePassword');
Route::get('/see-users', 'AdminController@users')->name('users')->middleware('auth')->middleware('admin');
Route::get('/see-deliveries', 'AdminController@deliveries')->name('deliveries')->middleware('auth')->middleware('admin');
Route::post('/add-user', 'AdminController@add_user')->name('add_user');
Route::get('/delivery-requests', 'DmController@request')->name('request')->middleware('auth')->middleware('dm');
Route::post('/delivery-requests', 'DmController@acceptreq')->name('acceptreq')->middleware('auth')->middleware('dm');
Route::get('/manage-deliveries', 'DmController@manage')->name('manage')->middleware('auth')->middleware('dm');
Route::post('/manage-deliveries', 'DmController@manageupdate')->name('manageupdate')->middleware('auth')->middleware('dm');


// Route::post('/contact-us', 'PagesController@contactFunc')->name('contactFunc');
