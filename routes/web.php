<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemPerdidoController;
use App\Http\Controllers\AdministracaoController;
use App\Http\Controllers\itemPaginaController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/itensperdidos',[ItemPerdidoController::class, 'index']);

Route::get('/admin', [AdministracaoController::class, 'index']);

Route::get('/item/{id}', [ItemPaginaController::class, 'index']);

Route::post('/itensperdidos/novo', [ItemPerdidoController::class, 'store']);