<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubirController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SubirController::class, 'index'])->name('subir.index');
Route::get('/subir/{id}', [SubirController::class, 'show'])->name('subir.show');
Route::get('/subir/create', [SubirController::class, 'create'])->name('subir.create');
Route::post('/subir', [SubirController::class, 'store'])->name('subir.store');