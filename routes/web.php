<?php

use Illuminate\Support\Facades\Route;

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
    $config = config('warriorcms.installstatus');
    if ($config == 0)
    {
        $url = '/installer';
    } else if ($config == 1)
    {
        $url = '/home';
    }

    header('Location: '.$url);
});
