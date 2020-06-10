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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas

Route::middleware(['auth'])->group(function () {
    
    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('can:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('can:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('can:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('can:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('can:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('can:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('can:roles.edit');

    
        //Users
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('can:users.create');

    Route::get('users/create', 'UserController@create')->name('users.create')
        ->middleware('can:users.create');

    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('can:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('can:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('can:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');


        
        //Oficinas
    Route::post('offices/store', 'OfficeController@store')->name('offices.store')
        ->middleware('can:offices.create');

    Route::get('offices', 'OfficeController@index')->name('offices.index')
        ->middleware('can:offices.index');

    Route::get('offices/create', 'OfficeController@create')->name('offices.create')
        ->middleware('can:offices.create');

    Route::put('offices/{office}/update', 'OfficeController@update')->name('offices.update')
        ->middleware('can:offices.edit');

    Route::get('offices/{office}', 'OfficeController@show')->name('offices.show')
        ->middleware('can:offices.show');

    Route::delete('offices/{office}', 'OfficeController@destroy')->name('offices.destroy')
        ->middleware('can:offices.destroy');

    Route::get('offices/{office}/edit', 'OfficeController@edit')->name('offices.edit')
        ->middleware('can:offices.edit');
    
        Route::get('offices/{office}/roledit', 'OfficeController@roledit')->name('offices.roledit')
        ->middleware('can:offices.edit');

    Route::put('offices/{office}', 'OfficeController@rolupdate')->name('offices.rolupdate')
        ->middleware('can:offices.edit');



        //Regimen Laboral
    Route::post('laborals/store', 'LaboralController@store')->name('laborals.store')
        ->middleware('can:laborals.create');

    Route::get('laborals', 'LaboralController@index')->name('laborals.index')
        ->middleware('can:laborals.index');

    Route::get('laborals/create', 'LaboralController@create')->name('laborals.create')
        ->middleware('can:laborals.create');

    Route::put('laborals/{laboral}', 'LaboralController@update')->name('laborals.update')
        ->middleware('can:laborals.edit');

    Route::get('laborals/{laboral}', 'LaboralController@show')->name('laborals.show')
        ->middleware('can:laborals.show');

    Route::delete('laborals/{laboral}', 'LaboralController@destroy')->name('laborals.destroy')
        ->middleware('can:laborals.destroy');

    Route::get('laborals/{laboral}/edit', 'LaboralController@edit')->name('laborals.edit')
        ->middleware('can:laborals.edit');




});