<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Transportista/tabla-transp');
});

//RUTAS DE LOGIN
Route::get('views/auth/login', function () {
    return view('auth/login');
})->name('login');

Route::get('views/auth/register', function () {
    return view('auth/register');
})->name('register');


Route::get('/show/{id}',[IngresoController::class,'showIn'])->name('ingreso.show');

//RUTAS TRANSPORTISTA
Route::get('/transportista',[\App\Http\Controllers\TransportistaController::class,'index'])->name('transportista.index');
Route::get('/create-transp',[\App\Http\Controllers\TransportistaController::class,'create'])->name('transportista.create');
Route::post('/store-transp',[\App\Http\Controllers\TransportistaController::class,'store'])->name('transportista.store');
Route::get('/edit-transp/{id_transportista}',[\App\Http\Controllers\TransportistaController::class,'edit'])->name('transportista.edit');
Route::put('/update-transp/{id_transportista}',[\App\Http\Controllers\TransportistaController::class,'update'])->name('transportista.update');
Route::get('/show-transp/{id_transportista}',[\App\Http\Controllers\TransportistaController::class,'show'])->name('transportista.show');
Route::delete('/destroy-transp/{id_transportista}', [\App\Http\Controllers\TransportistaController::class,'destroy'])->name('transportista.destroy');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//RUTAS INGRESO
Route::get('/ingreso',[\App\Http\Controllers\IngresoController::class,'index'])->name('ingreso.index');
Route::get('/in',[\App\Http\Controllers\IngresoController::class,'create'])->name('ingreso.create');
Route::post('/store-in',[\App\Http\Controllers\IngresoController::class,'store'])->name('ingreso.store');
Route::get('/show-in/{id_ingreso}',[\App\Http\Controllers\IngresoController::class,'show'])->name('ingreso.show');


//RUTAS EGRESO
Route::get('/egreso',[\App\Http\Controllers\EgresoController::class,'index'])->name('egreso.index');
Route::get('/out',[\App\Http\Controllers\EgresoController::class,'create'])->name('egreso.create');
Route::post('/store-out',[\App\Http\Controllers\EgresoController::class,'store'])->name('egreso.store');
Route::get('/show-out/{id_egreso}',[\App\Http\Controllers\EgresoController::class,'show'])->name('egreso.show');
