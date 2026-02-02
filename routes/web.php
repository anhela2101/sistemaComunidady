<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página de Inicio
Route::get('/', [PageController::class, 'home'])->name('home');

// Página "El Proyecto" (Misión, Visión, Desafíos)
Route::get('/el-proyecto', [PageController::class, 'project'])->name('project');

// Grupo de Rutas para Servicios
Route::prefix('servicios')->name('services.')->group(function () {
    
    // Línea 1: Centros Sociales (Mayores, Infancia)
    Route::get('/centros-sociales', [PageController::class, 'social'])->name('social');
    
    // Línea 2: Fiestas y Asociaciones (Apoyo Técnico)
    Route::get('/eventos-asociaciones', [PageController::class, 'associations'])->name('associations');
    
    // Línea 3: Cultura Municipal (Ayuntamientos)
    Route::get('/cultura-municipal', [PageController::class, 'municipal'])->name('municipal');
    
    // Línea 4: Turismo Rural (Hoteles, Casas Rurales)
    Route::get('/turismo-rural', [PageController::class, 'tourism'])->name('tourism');
    
    // Línea 5: Viajes y Ocio (Retorno Local)
    Route::get('/viajes', [PageController::class, 'travel'])->name('travel');
});

// Página de Contacto
Route::get('/contacto', [PageController::class, 'contact'])->name('contact');