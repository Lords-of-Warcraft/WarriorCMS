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

Route::prefix('home')->middleware(['installstatus', 'theme:'.Config('theme.active')])->group(function() {
    Theme::set(Config('theme.active'));
    Route::get('/', 'HomeController@index')->name('home');
});
