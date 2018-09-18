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

//Esto es lo que se nos crea al ejecutar el comando php artisan make:auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//========================================================================

//El paquete de Shinobi ya tiene su propio middlewares
