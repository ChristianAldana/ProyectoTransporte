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
    return view('in');
});


Route::get('/show/{id}',[IngresoController::class,'create'])->name('transportistas.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('camiones.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('pilotos.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('cargas.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('predios.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('bodegas.create');

Route::get('/show/{id}',[IngresoController::class,'showIn'])->name('ingreso.show');