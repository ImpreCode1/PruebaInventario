<?php
use App\Http\Controllers\ActivoController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Models\Activo;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
//rutas de vistas
Route::view('/login','login')->name('login');
Route::view('/crearactivo','crearactivo')->name('crearactivo');
Route::view('/informacionactiv','informacionactiv')->name('informacionactiv');
Route::view('/inicioadmin','inicioadmin')->name('inicioadmin');
Route::view('/mantenimiento','mantenimiento')->name('mantenimiento');


// Route::get('/crearactivo', function () {
//     return view('crearactivo');
// });
// Route::get('/informacionactiv', function () {
//     return view('informacionactiv');
// });
// Route::get('/inicioadmin', function () {
//     return view('inicioadmin');
// });
// Route::get('/', function () {
//     return view('login');
// });


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