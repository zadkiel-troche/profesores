<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', '\App\Http\Controllers\ProfesoresController@index')->name('profesores.index');

Route::get('/profesores/nuevo', '\App\Http\Controllers\ProfesoresController@nuevo');
Route::post('/profesores/nuevo', '\App\Http\Controllers\ProfesoresController@cargarProfesor')->name('profesores.nuevo');

route::get('/profesores/{id}/editar', '\App\Http\Controllers\ProfesoresController@editar')->name('profesores.editar');
route::post('/profesores/editar', '\App\Http\Controllers\ProfesoresController@modificar')->name('profesores.modificar');

route::get('/profesores/{id}/eliminar', '\App\Http\Controllers\ProfesoresController@eliminar');
