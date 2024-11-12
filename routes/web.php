<?php
use App\Http\Controllers\ActivoController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Models\Activo;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
//rutas de vistas
Route::view('/','login');
Route::view('/crearactivo','crearactivo')->name('crearactivo');
Route::view('/informacionactiv','informacionactiv')->name('informacionactiv');
Route::view('/inicioadmin','inicioadmin')->name('inicioadmin');
Route::view('/mantenimiento','mantenimiento')->name('mantenimiento');




// Peticiones de logica
//categoria
Route::post('/categoria/store', [CategoriaController::class, 'store'])->name('categoria.store');
// Rutas
Route::post('/activo/register', [ActivoController::class, 'register'])->name('activo.register');
//activo
// usuarios
Route::post('/usuarios/us', [UsuarioController::class, 'us'])->name('usuarios.us');
// metodo get activos inicio admin


Route::get('/inicioadmin', [ActivoController::class, 'index'])->name('inicioadmin');
// Route::get('/inicioadmin/categorias', [CategoriaController::class, 'index'])->name('categorias.index');

Route::post('/inicioadmin/login', [AuthController::class, 'login'])->name('inicioadmin.login');

// Route::get('/informacionactiv/{activo}', [ActivoController::class, 'show'])->name('informacionactiv.activ');
// Route::get('/activos', [ActivoController::class, 'index'])->name('activos.index');


//traer enser por id
// Route::get('/informacionactiv/{id}', 'ActivoController@verInfoActivo')->name('informacionactiv');
// Route::get('/informacionactiv/{id}', 'ActivoController@verInfoActivo')->name('informacionactiv');
Route::get('/activo/{ID}', [ActivoController::class, 'verInfoActivo'])->name('ver.activo');