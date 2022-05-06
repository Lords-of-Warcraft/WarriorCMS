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

Route::prefix('admin')->middleware(['installstatus', 'theme:admin', 'logged', 'admin'])->group(function() {
    Theme::set('admin');
    Route::get('/', 'AdminController@index')->name('admin_dashboard');
    Route::get('/settings', 'AdminController@settings')->name('admin_settings');
    Route::get('/modules', 'AdminController@modules')->name('admin_modules');
    Route::get('/users', 'AdminController@users')->name('admin_users');

    Route::post('/updater', 'AdminController@update')->name('admin_updater');
});
