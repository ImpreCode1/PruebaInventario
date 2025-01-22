<?php

use App\Http\Controllers\ActivoController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MantenimientoController;
use App\Models\Activo;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


// Rutas de autenticación
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
// Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/inicioadmin/login', [AuthController::class, 'login'])->name('inicioadmin.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas
Route::middleware(['auth'])->group(function () {
    // Rutas principales
    Route::get('/inicioadmin', [ActivoController::class, 'index'])->name('inicioadmin');
    Route::get('/crearactivo', [ActivoController::class, 'filtercategory'])->name('crearactivo');
    Route::get('/informacionactiv', [ActivoController::class, 'index'])->name('informacionactiv');

    // Rutas de Activos
    Route::controller(ActivoController::class)->group(function () {
        Route::post('/activo/register', 'register')->name('activo.register');
        Route::get('/activo/{ID}', 'verInfoActivo')->name('ver.activo');
        Route::delete('/activo/{activo}', 'delete')->name('activo.delete');
        Route::post('/activo/update', 'update')->name('activo.update');
    });

    // Rutas de Categorías
    Route::post('/categoria/store', [CategoriaController::class, 'store'])->name('categoria.store');

    // Rutas de Usuarios
    Route::post('/usuarios/us', [UsuarioController::class, 'us'])->name('usuarios.us');

    // Rutas de Mantenimiento
    Route::controller(MantenimientoController::class)->group(function () {
        Route::get('/mantenimiento', 'index')->name('mantenimiento');
        Route::get('/mantenimiento/{ID}', 'verMantenimiento')->name('ver.mantenimiento');
        Route::post('/mantenimiento/{activo}/store', 'store')->name('mantenimiento.store');
        Route::put('/mantenimiento/{id}/terminar', 'terminarMantenimiento')->name('mantenimiento.terminar');
        Route::post('/mantenimiento/{id}/upload-factura', 'uploadFactura')->name('mantenimiento.uploadFactura');
        Route::post('/mantenimiento/{id}', 'up')->name('mantenimiento.up');
        Route::put('/mantenimiento/{id}/update-factura', 'updateFactura')->name('mantenimiento.updateFactura');
    });

    // Rutas de Activos Eliminados
    Route::controller(ActivoController::class)->group(function () {
        Route::get('/activoseliminados', 'indexDestruidos')->name('activos.eliminados');
        Route::get('/activosdestruidos', 'getActivosDestruidos')->name('activosdestruidos');
        Route::put('/activoseliminados/{id}/reparar', 'repararElemento')
            ->where('id', '[0-9]+')
            ->name('elemento.reparar');
    });
});
