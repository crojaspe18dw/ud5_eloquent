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


Route::resource('proyectos','Controlador_Proyectos_Con_Recursos');

Route::resource('empleados','controlador_Empleados_Recursos');

Route::resource('departamentos','cooontrolador_departamentos_recursos');


