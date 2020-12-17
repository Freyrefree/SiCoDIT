<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', function () {
    return view('login');
})->name('login2');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('información', function () {
    return view('informacion');
})->name('info');

Route::get('garantia', function () {
    return view('garantia');
})->name('garantia');

Route::get('calendario', function () {
    return view('calendario');
})->name('calendario');



//********************************* Activos Fijos *********************************************** */
// Route::get('activosFijos', function () {
//     return view('activosFijos.listadoActivosFijos');
// })->name('activosFijos');


Route::get('activosFijos/listadoActivosFijos','ActivosFijos_Controller@listado')->name('activosFijos');
Route::post('sincronizar','ActivosFijos_Controller@sincronizar')->name('sincronizar');
Route::post('detalleActivoFijo','ActivosFijos_Controller@detalleActivoFijo')->name('detalleActivoFijo');




//******************************* Equipo QR **************************************************

Route::get('capturaQR', function () {
    return view('equipoQR.capturarQR');
})->name('capturaQR');

Route::get('equipoQR', function () {
    return view('equipoQR.principalQR');
})->name('equipoQR');

Route::post('guardarQR','QR_Controller@agregarQR')->name('guardarQR');
Route::post('escanear','QR_Controller@verificarQR')->name('escanear');

//******************************* CategoriaEquipo **************************************************
Route::get('categoriaEquipos','CategoriaEquipo_Controller@listado')->name('categoriaEquipo');
Route::post('inseratarDatosJs','CategoriaEquipo_Controller@agregar')->name('inseratarDatosJs');
Route::post('actualizarDatosJs','CategoriaEquipo_Controller@actualizar')->name('actualizarDatosJs');
Route::post('activarDesactivar','CategoriaEquipo_Controller@activarDesactivar')->name('activarDesactivar');
Route::post('obtenerDatosCategoriaEquipo','CategoriaEquipo_Controller@obtenerDatosCategoriaEquipo')->name('obtenerDatosCategoriaEquipo');