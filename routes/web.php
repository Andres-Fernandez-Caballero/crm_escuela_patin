<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CuotaController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// LOGIN Y REGISTER
Route::get('/', [WebController::class, 'index'])->name('index'); // Cambiar la ruta raíz a la lista de alumnos

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [SessionsController::class, 'create'])->name('login');
    Route::post('login', [SessionsController::class, 'store'])->name('signin');
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('signup');
});

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

//APARTADO ALUMNOS
Route::resource('alumnos', AlumnoController::class)->middleware('auth');

/* limpiar rutas de abajo :teacher: */
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create')->middleware('auth');
Route::get('/alumnos/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show')->middleware('auth');
Route::get('/alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit')->middleware('auth');

// CUOTAS
Route::get('/alumnos/{alumno}/show-cuotas', [AlumnoController::class, 'showCuotas'])->name('alumnos.showCuotas')->middleware('auth');
Route::put('/cuotas/{cuota}', [CuotaController::class, 'updateEstadoPago'])
    ->name('cuotas.updateEstadoPago')->middleware('auth');


//RUTA DE RECURSOS

Route::resource('disciplinas', DisciplinaController::class)->middleware('auth');
