<?php

use App\Http\Controllers\ConocimientoController;
use App\Http\Controllers\EducacionController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TrabajoController;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('personas.index');
});

Route::resource('portfolio', PortfolioController::class);

Route::resource('personas', PersonaController::class);
Route::resource('conocimientos', ConocimientoController::class);
Route::resource('proyectos', ProyectoController::class);
Route::resource('trabajos', TrabajoController::class);
Route::resource('educacions', EducacionController::class);
