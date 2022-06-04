<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JuegosController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('layouts.main');
    });
});

Route::middleware(['auth','authAdmin'])->group(function () {
    Route::prefix('juegos')->group(function () {
        //Vistas
        Route::get('/', [JuegosController::class, 'index'])->name('juegos.index');
        Route::get('/crear', [JuegosController::class, 'crear'])->name('juegos.crear');
        Route::get('/editar/{id}', [JuegosController::class, 'editar'])->name('juegos.editar');
    
        //procesos
        Route::get('/getAll', [JuegosController::class, 'getAll'])->name('juegos.getJuegos');
        Route::post('/processCreate', [JuegosController::class, 'processCreate'])->name('juegos.processCreate');
        Route::post('/processEdit', [JuegosController::class, 'processEdit'])->name('juegos.processEdit');
        Route::post('/eliminar', [JuegosController::class, 'eliminar'])->name('juegos.eliminar');
    });
});



