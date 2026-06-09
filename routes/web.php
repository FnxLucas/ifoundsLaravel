<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemPerdidoController;
use App\Http\Controllers\AdministracaoController;
use App\Http\Controllers\itemPaginaController;
use App\Http\Controllers\LoginPaginaController;

Route::get('/',[LoginPaginaController::class, 'index']);
Route::post('/registrar',[LoginPaginaController::class, 'register']);

Route::get('/itensperdidos',[ItemPerdidoController::class, 'index']);
Route::get('/admin', [AdministracaoController::class, 'index']);
Route::get('/item/{id}', [ItemPaginaController::class, 'index']);

Route::post('/itensperdidos/novo', [ItemPerdidoController::class, 'store']);
Route::post('/admin/novo', [AdministracaoController::class, 'store']);
Route::delete('/admin/deletar',[AdministracaoController::class,'destroy']);
Route::put('/admin/editar',[AdministracaoController::class,'update']);