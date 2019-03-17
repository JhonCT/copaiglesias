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
})->name('home');

Route::post('inscripcion', 'InscripcionController@registrarse')->name('inscripcion');
Route::get('login', 'InscripcionController@login')->name('login');
Route::post('reporte', 'InscripcionController@inscripciones')->name('reporte'); 
Route::get('download/{file}' , 'InscripcionController@downloadFile');
Route::get('formato' , 'InscripcionController@descargarFormato');
Route::get('reglamento' , 'InscripcionController@descargarReglamento');
Route::post('validar', 'Validapago@recepcion')->name('validarpago');  
Route::post('validarestdo', 'verificarestadopago@verificarestado')->name('verificarestadopago');  
Route::get('eliminar/{id}', 'InscripcionController@eliminarInscripcion')->name('eliminar');
//Route::post('loginReporte', 'InscripcionController@loginReporte')->name('login');
//PRUEBA DE SERVICIOS
Route::get('prueba', 'InscripcionController@prueba')->name('prueba');
