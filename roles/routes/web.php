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

//**********El paquete de Shinobi ya tiene su propio middlewares************
//Rutas
Route::group(['middleware' => ['auth']], function () {
    /* Pasamos la ruta, el nombre de la ruta y la verificación del permiso.
    El permiso va a comprobarlo en el archivo kernel.php */

    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
    ->middlleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middlleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
    ->middlleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middlleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middlleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middlleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middlleware('permission:roles.edit');


    //Productos
    Route::post('products/store', 'ProductController@store')->name('products.store')
    ->middlleware('permission:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
    ->middlleware('permission:products.index');

    Route::get('products/create', 'ProductController@create')->name('products.create')
    ->middlleware('permission:products.create');

    Route::put('products/{role}', 'ProductController@update')->name('products.update')
    ->middlleware('permission:products.edit');

    Route::get('products/{role}', 'ProductController@show')->name('products.show')
    ->middlleware('permission:products.show');

    Route::delete('products/{role}', 'ProductController@destroy')->name('products.destroy')
    ->middlleware('permission:products.destroy');

    Route::get('products/{role}/edit', 'ProductController@edit')->name('products.edit')
    ->middlleware('permission:products.edit');


    //Usuarios
    Route::get('users', 'UserController@index')->name('users.index')
    ->middlleware('permission:users.index');

    Route::put('users/{role}', 'UserController@update')->name('users.update')
    ->middlleware('permission:users.edit');

    Route::get('users/{role}', 'UserController@show')->name('users.show')
    ->middlleware('permission:users.show');

    Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')
    ->middlleware('permission:users.destroy');

    Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
    ->middlleware('permission:users.edit');

});
