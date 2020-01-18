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

Route::get('Citas/insert', function () {
    return view('Citas/insert');
})->name('insertarcit');

Route::post('Citas/insert','CitasController@InsertCit')->name('InsertCita');

Route::get('Citas/update/{id}','CitasController@UpdateCit')->name('UpdateCita');

Route::get('Citas/delete/{id}', 'CitasController@DeleteCit')->name('DeleteCita');

Route::get('Citas/view', 'CitasController@ViewCit')->name('ViewCita');



Route::get('Registros/insert', function () {
    return view('Registros/insert');
})->name('insertarregis');

Route::post('Registros/insert','RegistrosController@InsertRegis')->name('InsertRegistro');

Route::get('Registros/update/{id}','RegistrosController@UpdateRegis')->name('UpdateRegistro');

Route::get('Registros/delete/{id}', 'RegistrosController@DeleteRegis')->name('DeleteRegistro');

Route::get('Registros/view', 'RegistrosController@ViewRegis')->name('ViewRegistro');



Route::get('Inscripciones/insert','InscripcionesController@ViewInsertInscrip')->name('ViewInsertInscripcion');

Route::post('Inscripciones/insert','InscripcionesController@InsertInscrip')->name('InsertInscripcion');

Route::get('Inscripciones/update/{id}','InscripcionesController@UpdateInscrip')->name('UpdateInscripcion');

Route::get('Inscripciones/delete/{id}', 'InscripcionesController@DeleteInscrip')->name('DeleteInscripcion');

Route::get('Inscripciones/view', 'InscripcionesController@ViewInscrip')->name('ViewInscripcion');



Route::get('Cancelaciones/insert','CancelacionesController@ViewInsertCancel')->name('ViewInsertCancelacion');
Route::post('Cancelaciones/insert','CancelacionesController@InsertCancel')->name('InsertarCancelacion');
Route::get('Cancelaciones/delete/{id}', 'CancelacionesController@DeleteCancel')->name('DeleteCancelacion');

Route::get('Cancelaciones/view', 'CancelacionesController@ViewCancel')->name('viewcancel');



Route::get('Cotizaciones/insert','CotizacionesController@ViewInsertCotiza')->name('ViewInsertCotizacion');
Route::post('Cotizaciones/insert','CotizacionesController@InsertCotiza')->name('InsertarCotizacion');
Route::get('Cotizaciones/update/{id}','CotizacionesController@UpdateCotiza')->name('UpdateCotizacion');
Route::get('Cotizaciones/delete/{id}', 'CotizacionesController@DeleteCotiza')->name('DeleteCotizacion');

Route::get('Cotizaciones/view', 'CotizacionesController@ViewCotiza')->name('viewcotiza');


Route::get('Calificaciones/insert','CalificacionesController@ViewInsertCalifica')->name('ViewInsertCalificacion');
Route::post('Calificaciones/insert','CalificacionesController@InsertCalifica')->name('InsertarCalificacion');
Route::get('Calificaciones/update/{id}','CalificacionesController@UpdateCalifica')->name('UpdateCalificacion');
Route::get('Calificaciones/delete/{id}', 'CalificacionesController@DeleteCalifica')->name('DeleteCalificacion');

Route::get('Calificaciones/view', 'CalificacionesController@ViewCalifica')->name('viewcalifica');




Route::post('Registros/update','RegistrosController@UpdateBdRegis')->name('UpdateBdRegistro');

Route::post('Citas/update','CitasController@UpdateBdCit')->name('UpdateBdCita');

Route::post('Inscripciones/update','InscripcionesController@UpdateBdInscrip')->name('UpdateBdInscripcion');

Route::post('Cotizaciones/update','CotizacionesController@UpdateBdCotiza')->name('UpdateBdCotizacion');

Route::post('Calificaciones/update','CalificacionesController@UpdateBdCalifica')->name('UpdateBdCalificacion');