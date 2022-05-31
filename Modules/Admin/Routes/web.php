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
    Route::get('/users/{id}', 'AdminController@usersview')->name('admin_users_view');

    Route::get('/modules/{module}', 'AdminController@moduleSettings')->name('admin_modules_views');
    Route::get('/modules/activate/{module}', 'AdminController@activateModule')->name('admin_modules_activate');
    Route::get('/modules/deactivate/{module}', 'AdminController@deactivateModule')->name('admin_modules_deactivate');

    Route::post('/updater', 'AdminController@update')->name('admin_updater');
});
