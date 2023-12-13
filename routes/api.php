<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ApiController;

Route::group(['prefix'=> 'v1', 'namespace => App\Http\Controllers'], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/clientes', [ApiController::class, 'getClientes']);
    Route::get('/asesores', [ApiController::class, 'getAsesores']);
    Route::get('/proyectos', [ApiController::class, 'getProyectos']);
    Route::get('/home', [AdminController::class, 'index'])->name('admin.index');
    Route::apiResource('users', UserController::class);
    Route::post('proyectos/bulk', [ProyectosController::class, 'bulkStore']);
});
