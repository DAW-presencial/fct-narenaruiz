<?php

use Illuminate\Support\Facades\Route;
//use \App\Http\Controllers\MiControlador;//añadido para la tercera forma
use \App\Http\Controllers\CorreoController;
use \App\Http\Controllers\ContactController;

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

/*
//Route::get('/', function () {
    return view('welcome');
});
*/


//Probando ruta para la view
Route::get('/Prueba1', function () {
    return view('/trabajoFCT/formularioEmpresas');
});


//Ruta para el home, tengo que poner algo para que no sea solo un texto
Route::view('/', '/trabajoFCT/home')->name('home');// asi esta bien el name? lo digo por la flecha

//Rutas Formulario Empresas
Route::view('/empresas', '/trabajoFCT/empresas')->name('empresas');
Route::post('/empresas', 'FormularioEmpresasController@store');
//dentro return $request

//Rutas Formulario Tutores
Route::view('/tutores', '/trabajoFCT/tutores')->name('tutores');

//Rutas Formulario Centros De Trabajo
Route::view('/centrosDeTrabajos', '/trabajoFCT/centrosTrabajo')->name('centrosTrabajo');

//Ruta api rest postman
//Route::post('/consultaBaseDeDatos', 'ConsultasController@toArray')->name('consultaBaseDeDatos');

//Apartado Api Rest
Route::resource('contacts', 'ContactController');
Route::apiResource('contacts', 'ContactController');