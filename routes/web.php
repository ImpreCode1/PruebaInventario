<?php

use App\Http\Controllers\ActivoController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MantenimientoController;
use App\Models\Activo;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

//rutas de vistas
Route::view('/', 'login');
Route::view('/crearactivo', 'crearactivo')->name('crearactivo');
Route::view('/informacionactiv', 'informacionactiv')->name('informacionactiv');
Route::view('/inicioadmin', 'inicioadmin')->name('inicioadmin');
Route::view('/mantenimiento', 'mantenimiento')->name('mantenimiento');
Route::view('/activoseliminados', 'activoseliminados')->name('activoseliminados');
Route::view('/activosdestruidos', 'activosdestruidos')->name('activosdestruidos');





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


Route::post('/inicioadmin/login', [AuthController::class, 'login'])->name('inicioadmin.login');




Route::get('/activo/{ID}', [ActivoController::class, 'verInfoActivo'])->name('ver.activo');

//obtener mantenimiento por id
Route::get('/mantenimiento/{ID}', [MantenimientoController::class, 'verMantenimiento'])->name('ver.mantenimiento');

//crear mantenimiento
Route::post('/mantenimiento/{activo}/store', [MantenimientoController::class, 'store'])->name('mantenimiento.store');
Route::put('/mantenimiento/{id}/terminar', [MantenimientoController::class, 'terminarMantenimiento'])->name('mantenimiento.terminar');
//listar mantenimientos de cada activo
// Route::get('/mantenimiento', [MantenimientoController::class, 'index'])->name('mantenimiento.index');
Route::delete('activo/{activo}', [ActivoController::class, 'delete'])->name('activo.delete');

Route::get('/crearactivo', [ActivoController::class, 'filtercategory'])->name('crearactivo');


// editar activo
//Route::put('/activo/update/{activo}', [ActivoController::class, 'update'])->name('activo.update');
Route::post('/activo/update', [ActivoController::class, 'update'])->name('activo.update');
Route::post('/mantenimiento/{id}/upload-factura', [MantenimientoController::class, 'uploadFactura'])->name('mantenimiento.uploadFactura');
// Route::post('/mantenimiento/{id}/', [MantenimientoController::class, 'up'])->name('mantenimiento.up');
Route::get('/mantenimiento/{id}', function ($id) {
    $activo = Activo::findOrFail($id);
    return view('mantenimiento.form', compact('activo'));
})->name('mantenimiento.form');

// Ruta para manejar el envío del formulario
Route::post('/mantenimiento/{id}', [MantenimientoController::class, 'up'])->name('mantenimiento.up');
Route::put('/mantenimiento/{id}/update-factura', [MantenimientoController::class, 'updateFactura'])->name('mantenimiento.updateFactura');


// ruta articulos eliminados






Route::get('/activoseliminados', [ActivoController::class, 'indexDestruidos'])->name('activosdestruidos.index');
Route::get('/getActivosDestruidos', [ActivoController::class, 'getActivosDestruidos'])->name('activosdestruidos.data');

// Rutas originales
Route::post('/activoseliminados', [ActivoController::class, 'index'])->name('activos.index');
Route::post('/getActivosDestruidos', [ActivoController::class, 'getActivos'])->name('activos.data');





    // routes/web.php



