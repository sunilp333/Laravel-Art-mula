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

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth','checkrole'] , 'prefix' => 'admin'], function () {

    Route::resource('pages', 'PagesController');


	Route::resource('test', 'new_testController');
	Route::resource('siteoptions', 'AdminGlobalSettingController');
	Route::resource('paymentoptions', 'AdminPaymentSettingsController');
	Route::resource('page', 'AdminPagesController');
	Route::resource('members', 'AdminMembersController');
	Route::any('dashboard', 'AdminGlobalSettingController@dashboard');
   
});

Route::delete('pages/mass_destroy', 'PagesController@mass_destroy')->name('pages.mass_destroy');

