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


Route::view('/', "relations");
Route::get('/proyectos', ['as'=>'proyectos','uses'=>'ProyectoController@index']);
Route::get('/proyecto/{id}', ['as'=>'proyecto','uses'=>'ProyectoController@get']);
Route::get('/empleados', ['as'=>'empleados','uses'=>'EmpleadoController@index']);
Route::get('/empleado/{id}', ['as'=>'empleado','uses'=>'EmpleadoController@get']);
Route::get('/departamentos', ['as'=>'departamentos','uses'=>'DepartamentoController@index']);
Route::get('/departamento/{id}', ['as'=>'departamento','uses'=>'DepartamentoController@get']);
