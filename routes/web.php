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
Route::get('/serviciosD', [ServicioController::class, 'desactivo']);
Route::get('/createService', [ServicioController::class, 'create']);
Route::post('/storeService', [ServicioController::class, 'store']);
Route::get('/editService/{id}', [ServicioController::class, 'edit']);
Route::put('/updateService/{id}', [ServicioController::class, 'update']);
Route::get('/statuService/{id}', [ServicioController::class, 'status']);











//Ruta Mision y Vision

Route::get('/MisVis',[MisVisController::class, 'index']);
Route::get('/createMisVis', [MisVisController::class, 'create']);
Route::post('/storeMisVis', [MisVisController::class, 'store']);
Route::get('/editMisVis/{id}', [MisVisController::class, 'edit']);
Route::put('/updateMisVis/{imagen}', [MisVisController::class, 'update']);
Route::get('/statusMisVis/{id}', [MisVisController::class, 'status']);
Route::get('/MisVisD',[MisVisController::class, 'indexD']);























//Rutas redes
Route::get('/redes', [RedesController::class, 'index']);
Route::get('/createRed', [RedesController::class, 'create']);
Route::post('/storeRed', [RedesController::class, 'store']);
Route::get('/editRed/{id}', [RedesController::class,'edit']);
Route::put('/updateRed', [RedesController::class,'update']);
Route::get('/statusRed/{id}', [RedesController::class,'status']);
Route::get('/redesd', [RedesController::class, 'indexD']);

