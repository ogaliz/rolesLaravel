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
Route::get('/mensaje', function(){
    return "Hola mundo";
});

Route::get('/', function () {
    return view('welcome');
});

//Esto es lo que se nos crea al ejecutar el comando php artisan make:auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//========================================================================

//**********El paquete de Shinobi ya tiene su propio middlewares************
//Rutas
<<<<<<< HEAD
Route::middleware(['auth'])->group(function() {
=======
Route::group(['middleware' => ['auth']], function () {
>>>>>>> a6bf795c88a0bcd76188670f2274ed955f923b56
    /* Pasamos la ruta, el nombre de la ruta y la verificación del permiso.
    El permiso va a comprobarlo en el archivo kernel.php */

    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
<<<<<<< HEAD
    ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');
=======
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
>>>>>>> a6bf795c88a0bcd76188670f2274ed955f923b56


    //Productos
    Route::post('products/store', 'ProductController@store')->name('products.store')
<<<<<<< HEAD
    ->middleware('permission:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
    ->middleware('permission:products.index');

    Route::get('products/create', 'ProductController@create')->name('products.create')
    ->middleware('permission:products.create');

    Route::put('products/{role}', 'ProductController@update')->name('products.update')
    ->middleware('permission:products.edit');

    Route::get('products/{role}', 'ProductController@show')->name('products.show')
    ->middleware('permission:products.show');

    Route::delete('products/{role}', 'ProductController@destroy')->name('products.destroy')
    ->middleware('permission:products.destroy');

    Route::get('products/{role}/edit', 'ProductController@edit')->name('products.edit')
    ->middleware('permission:products.edit');
=======
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
>>>>>>> a6bf795c88a0bcd76188670f2274ed955f923b56


    //Usuarios
    Route::get('users', 'UserController@index')->name('users.index')
<<<<<<< HEAD
    ->middleware('permission:users.index');

    Route::put('users/{role}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{role}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');

    Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
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
>>>>>>> a6bf795c88a0bcd76188670f2274ed955f923b56
