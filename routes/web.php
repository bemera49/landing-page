<?php

use App\Http\Controllers\CompetitionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('welcome'); });

// Ruta principal - Landing page
Route::get('/', [CompetitionController::class, 'index'])->name('competition.index');

// Ruta para obtener ciudades basadas en el departamento seleccionado (AJAX)
Route::post('/ciudades', [CompetitionController::class, 'getCities'])->name('cities.get');
Route::get('/get-departaments/{ciudadId}', [CompetitionController::class, 'getDepartament']);

// Ruta para guardar el registro de un participante
Route::post('/participar', [CompetitionController::class, 'store'])->name('competition.store');
// Ruta para seleccionar un ganador
Route::post('/seleccionar-ganador', [CompetitionController::class, 'selectWinner'])->name('competition.winner');

// Ruta para exportar datos a Excel
Route::get('/exportar-excel', [CompetitionController::class, 'exportExcel'])->name('competition.excel');

// Ruta para mostrar la política de privacidad
Route::get('/politica-privacidad', [CompetitionController::class, 'privacyPolicy'])->name('competition.privacy');
