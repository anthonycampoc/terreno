<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\panel\MisVisController;
use App\Http\Controllers\panel\RedesController;
use App\Http\Controllers\panel\ServicioController;
use App\Http\Controllers\PanelController;
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
//RUTAS PAGINA WEB
Route::get('/', [PaginaController::class, 'index']);

//RUTAS PANEL DE CONTROL
Route::get('admin', [PanelController::class, 'index']);

//Rutas Servicios
Route::get('/servicios', [ServicioController::class, 'index']);
Route::get('/createService', [ServicioController::class, 'create']);
Route::post('/storeService', [ServicioController::class, 'store']);
//Ruta Mision y Vision

Route::get('/MisVis',[MisVisController::class, 'index']);
Route::get('/EditMisVis', [MisVisController::class, 'edit']);

//Rutes redes
Route::get('/redes', [RedesController::class, 'index']);

