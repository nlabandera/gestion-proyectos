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
    return view('/layouts/app');
});
// Empleados
Route::get('empleados','EmpleadoController@index')->name('empleados.index');
Route::get('empleados/{id}','EmpleadoController@show')->name('empleados.empleado');
Route::get('empleados/create','EmpleadoController@create')->name('empleados.create');
Route::get('empleados/{id}/edit','EmpleadoController@edit')->name('empleados.edit');
Route::put('empleados/{id}','EmpleadoController@update')->name('empleados.update');
Route::delete('empleados/{id}','EmpleadoController@destroy')->name('empleados.destroy');
Route::post('empleados','EmpleadoController@store')->name('empleados.store');

// Proyectos
Route::get('proyectos','ProyectoController@index')->name('proyectos.index');
Route::get('proyectos/{id}','ProyectoController@show')->name('proyectos.proyecto');
Route::get('proyectos/create','ProyectoController@create')->name('create.proyeto');
Route::get('proyectos/{id}/edit','ProyectoController@edit')->name('edit.proyeto');
Route::put('proyectos/{id}','ProyectoController@update')->name('update.proyeto');
Route::delete('proyectos/{id}','ProyectoController@destroy')->name('destroy.proyeto');
Route::post('proyectos','ProyectoController@store')->name('store.proyeto');
//Departamentos
Route::get('departamentos','DepartamentoController@index')->name('departamentos.index');
Route::get('departamentos/{id}','DepartamentoController@show')->name('departamentos.departamento');
