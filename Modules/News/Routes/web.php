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

Route::prefix('news')->middleware(['installstatus', 'theme:'.Config('theme.active')])->group(function() {
    Theme::set(Config('theme.active'));
    Route::get('/', 'NewsController@index');
});

Route::prefix('admin')->middleware(['installstatus', 'theme:admin', 'logged', 'admin'])->group(function() {
    Route::get('/news/create', 'NewsController@create_news')->name('create_news');
    Route::post('/news/insert', 'NewsController@insert_news')->name('admin_insert_news');
});
