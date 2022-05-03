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

Route::prefix('user')->middleware(['installstatus', 'theme:'.Config('theme.active')])->group(function() {
    Theme::set(Config('theme.active'));

    Route::post('/auth', 'UserController@log_in');
    Route::get('/logout', 'UserController@log_out');
    Route::post('/insert', 'UserController@register_user');

    Route::get('/', 'UserController@index');
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/register', 'UserController@register')->name('register');

});
