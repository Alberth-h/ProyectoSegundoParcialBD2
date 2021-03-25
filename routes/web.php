<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Registros;

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

Route::get('/', 'App\Http\Controllers\RegistrosController@raiz')->name('registros.raiz');

Route::get('registros', 'App\Http\Controllers\RegistrosController@index')->name('registros.index');

Route::get('agregar', 'App\Http\Controllers\RegistrosController@agregar')->name('registros.agregar');

Route::post('crear', 'App\Http\Controllers\RegistrosController@store')->name('registros.store');

Route::get('registros/{id}/editar', 'App\Http\Controllers\RegistrosController@editar')->name('registros.editar');

Route::put('registros/{registros}/editar', 'App\Http\Controllers\RegistrosController@update')->name('registros.update');

Route::delete('registros/{id}', 'App\Http\Controllers\RegistrosController@destroy' )->name('registros.destroy');