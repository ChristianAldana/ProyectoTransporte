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

//Route::get('/', function () {

// return view('Transportista/regTransporte');
//});

  //  return view('Transportista/regTransporte');
//});


//    return view('Transportista/regTransporte');
//});


Route::get('/show/{id}',[IngresoController::class,'showIn'])->name('ingreso.show');

//RUTAS TRANSPORTISTA
Route::get('/transportista',[\App\Http\Controllers\TransportistaController::class,'index'])->name('transportista.index');
Route::get('/create-transp',[\App\Http\Controllers\TransportistaController::class,'create'])->name('transportista.create');
Route::post('/store-transp',[\App\Http\Controllers\TransportistaController::class,'store'])->name('transportista.store');
Route::get('/edit-transp/{id_transportista}',[\App\Http\Controllers\TransportistaController::class,'edit'])->name('transportista.edit');
Route::put('/update-transp/{id_transportista}',[\App\Http\Controllers\TransportistaController::class,'update'])->name('transportista.update');
Route::get('/show-transp/{id_transportista}',[\App\Http\Controllers\TransportistaController::class,'show'])->name('transportista.show');
Route::delete('/destroy-transp/{id_transportista}', [\App\Http\Controllers\TransportistaController::class,'destroy'])->name('transportista.destroy');



//RUTAS DE INGRESO
Route::get('/show/{id}',[IngresoController::class,'create'])->name('transportistas.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('camiones.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('pilotos.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('cargas.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('predios.create');
Route::get('/show/{id}',[IngresoController::class,'create'])->name('bodegas.create');


Route::get('/show/{id}',[IngresoController::class,'showIn'])->name('ingreso.show');
//Route::get('/show/{id}',[IngresoController::class,'showIn'])->name('ingreso.show');

//Auth::routes();
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
