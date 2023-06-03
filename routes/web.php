<?php
use Illuminate\Support\Facades\Route;




Route::get('/', function () {

    return view('Home');

});

Route::get('views/vendor/Home', function () {
    return view('Home');
})->name('Home');

//Route::get('/', function () {

  //  return view('Ingreso/in');

//});

//RUTAS DE LOGIN
Route::get('views/auth/login', function () {
   return view('auth/login');
})->name('login');

Route::get('views/auth/register', function () {
    return view('auth/register');
})->name('register');

//Route::post('/register', 'register');
Route::post('/register',[RegisterController::class, 'index']);

Route::post('/login',[LoginController::class, '$redirectTo']);

//Route::get('/register',[\App\Http\Controllers\Auth\RegisterController::class,'validator'])->name('register.create');

Route::get('/show/{id}',[IngresoController::class,'showIn'])->name('ingreso.show');

//RUTAS TRANSPORTISTA
Route::get('/transportista',[\App\Http\Controllers\TransportistaController::class,'index'])->name('transportista.index');
Route::get('/create-transp',[\App\Http\Controllers\TransportistaController::class,'create'])->name('transportista.create');
Route::post('/store-transp',[\App\Http\Controllers\TransportistaController::class,'store'])->name('transportista.store');
Route::get('/edit-transp/{id_transportista}',[\App\Http\Controllers\TransportistaController::class,'edit'])->name('transportista.edit');
Route::put('/update-transp/{id_transportista}',[\App\Http\Controllers\TransportistaController::class,'update'])->name('transportista.update');
Route::get('/show-transp/{id_transportista}',[\App\Http\Controllers\TransportistaController::class,'show'])->name('transportista.show');
Route::delete('/destroy-transp/{id_transportista}', [\App\Http\Controllers\TransportistaController::class,'destroy'])->name('transportista.destroy');


// RUTAS CAMION
Route::get('/camion', [\App\Http\Controllers\CamionController::class, 'index'])->name('camion.index');
Route::get('/create-camion', [\App\Http\Controllers\CamionController::class, 'create'])->name('camion.create');
Route::post('/store-camion', [\App\Http\Controllers\CamionController::class, 'store'])->name('camion.store');
Route::get('/edit-camion/{matricula}', [\App\Http\Controllers\CamionController::class, 'edit'])->name('camion.edit');
Route::put('/update-camion/{matricula}', [\App\Http\Controllers\CamionController::class, 'update'])->name('camion.update');
Route::get('/show-camion/{matricula}', [\App\Http\Controllers\CamionController::class, 'show'])->name('camion.show');
Route::delete('/destroy-camion/{matricula}', [\App\Http\Controllers\CamionController::class, 'destroy'])->name('camion.destroy');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//RUTAS INGRESO
Route::get('/ingreso',[\App\Http\Controllers\IngresoController::class,'index'])->name('ingreso.index');
Route::get('/in',[\App\Http\Controllers\IngresoController::class,'create'])->name('ingreso.create');
Route::post('/store-in',[\App\Http\Controllers\IngresoController::class,'store'])->name('ingreso.store');
Route::get('/show-in/{id_ingreso}',[\App\Http\Controllers\IngresoController::class,'show'])->name('ingreso.show');
Route::get('/fecha-in',[\App\Http\Controllers\IngresoController::class,'fecha'])->name('ingreso.fecha');


//RUTAS EGRESO
Route::get('/egreso',[\App\Http\Controllers\EgresoController::class,'index'])->name('egreso.index');
Route::get('/out',[\App\Http\Controllers\EgresoController::class,'create'])->name('egreso.create');
Route::post('/store-out',[\App\Http\Controllers\EgresoController::class,'store'])->name('egreso.store');
Route::get('/show-out/{id_egreso}',[\App\Http\Controllers\EgresoController::class,'show'])->name('egreso.show');
Route::get('/fecha-out',[\App\Http\Controllers\IngresoController::class,'fecha'])->name('egreso.fecha');

Route::get('/filtro', [IngresoController::class, 'filtroNombre'])->name('ingreso.filtro');


Route::get('/fecha-out',[\App\Http\Controllers\EgresoController::class,'fecha'])->name('egreso.fecha');
