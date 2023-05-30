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

Route::get('/', function () {
    return view('Transportista/tabla-transp');
});

<<<<<<< HEAD
Route::get('/show/{id}',[IngresoController::class,'showIn'])->name('ingreso.show');


//RUTAS TRANSPORTISTA
Route::get('/transportista',[\App\Http\Controllers\TransportistaController::class,'index'])->name('transportista.index');
Route::get('/create-transp',[\App\Http\Controllers\TransportistaController::class,'create'])->name('transportista.create');
Route::post('/store-transp',[\App\Http\Controllers\TransportistaController::class,'store'])->name('transportista.store');
Route::get('/edit-transp/{id}',[\App\Http\Controllers\TransportistaController::class,'edit'])->name('transportista.edit');
Route::put('/update-transp/{id}',[\App\Http\Controllers\TransportistaController::class,'update'])->name('transportista.update');
Route::get('/show-transp/{id}',[\App\Http\Controllers\TransportistaController::class,'show'])->name('transportista.show');
Route::delete('/destroy-transp/{id}', [\App\Http\Controllers\TransportistaController::class,'destroy'])->name('transportista.destroy');
=======

Route::get('/show/{id}',[IngresoController::class,'create'])->name('transportistas.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('camiones.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('pilotos.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('cargas.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('predios.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('bodegas.create');

Route::get('/show/{id}',[IngresoController::class,'showIn'])->name('ingreso.show');
>>>>>>> ec5fbb1cfbd8ea03ab04bd2f985767cc4ea36e76
