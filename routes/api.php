<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('me', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);

    Route::apiResource('roles', RolController::class);
    Route::apiResource('usuarios', UsuarioController::class);
});

Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('productos', ProductoController::class);
Route::apiResource('clientes', ClienteController::class);
Route::apiResource('pedidos', PedidoController::class);
Route::apiResource('ingredientes', IngredienteController::class);
    