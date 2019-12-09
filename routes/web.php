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

// Proyectos
Route::get('proyectos','ProyectoController@index')->name('proyectos.index');
Route::get('proyectos/{id}','ProyectoController@show')->name('proyectos.proyecto');
Route::get('create','ProyectoController@create')->name('proyectos.create');
Route::resource('proyectos.index', 'ProyectoController')->only('store','delete');
//Departamentos
Route::get('departamentos','DepartamentoController@index')->name('departamentos.index');
Route::get('departamentos/{id}','DepartamentoController@show')->name('departamentos.departamento');
