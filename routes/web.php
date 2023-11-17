<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/usuarios', UsuarioController::class);
Route::resource('/ejercicios', App\Http\Controllers\EjercicioController::class);
Route::resource('/pacientes', App\Http\Controllers\PacienteController::class);
Route::resource('/detalle-rutinas', App\Http\Controllers\DetalleRutinaController::class);
Route::resource('/detalle-per-rols', App\Http\Controllers\DetallePerRolController::class);
Route::resource('/permisocat', App\Http\Controllers\PermisoCatController::class);
Route::resource('/rolcat', App\Http\Controllers\RolCatController::class);
Route::resource('/rutina', App\Http\Controllers\RutinaController::class);
Route::resource('/usuariodetalle', App\Http\Controllers\UsuarioDetalleController::class);
