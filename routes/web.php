<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntregaController;

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

// Rota para exibir o formulário
Route::get('/entrega/create', [EntregaController::class, 'create']);
Route::get('/entrega/list', [EntregaController::class, 'index']);
Route::get('/', [EntregaController::class, 'index']);

// Rota para processar o formulário
Route::post('/entrega/store', [EntregaController::class, 'store']);
Route::delete('/entrega/{host}/{id}', [EntregaController::class, 'destroy']);

