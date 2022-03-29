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

Route::prefix('installer')->group(function() {
    Route::middleware(['status'])->group(function() {
        Route::get('/', 'InstallerController@web');

        Route::get('/web', 'InstallerController@web');

        Route::get('/server', 'InstallerController@server');

        Route::get('/server/auth', 'InstallerController@auth');

        Route::get('/server/realm', 'InstallerController@realm');

        Route::get('/user', 'InstallerController@user');

        Route::post('/server/addrealm', 'InstallerController@addrealm');

        Route::post('/server/realm/remove', 'InstallerController@realmremove');

        Route::post('/webinstall', 'InstallerController@installweb');

        Route::post('/server/addauth', 'InstallerController@addauthdb');

        Route::post('/server/auth/remove', 'InstallerController@authremove');

        Route::post('/server/finish', 'InstallerController@finish');
    });
});
