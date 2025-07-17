<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\ImprimirController;
use App\Http\Controllers\ProbatorioController;
use App\Http\Controllers\Informe_probatorioController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/perfil', [UsuarioController::class, 'perfil'])->name('cuenta')->middleware('auth');
Route::get('/informe', [InformeController::class, 'mostrar'])->name('informe')->middleware('auth');
Route::post('/informe', [InformeController::class, 'guardar'])->name('informe-guardar')->middleware('auth');
Route::get('/imprimir', [ImprimirController::class, 'mostrar'])->name('imprimir')->middleware('auth');
Route::get('/probatorios', [ProbatorioController::class, 'mostrar'])->name('probatorios')->middleware('auth');
Route::post('/probatorios', [ProbatorioController::class, 'guardar'])->name('probatorios')->middleware('auth');
Route::post('/insertar_probatorios', [Informe_probatorioController::class, 'guardar'])->name('insertar_probatorios')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('inicio')->middleware('auth');





