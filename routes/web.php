<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemPerdidoController;
use App\Http\Controllers\AdministracaoController;
use App\Http\Controllers\itemPaginaController;
use App\Http\Controllers\LoginPaginaController;



    Route::get('/',[LoginPaginaController::class, 'index'])->name('login');
    Route::post('/registrar',[LoginPaginaController::class, 'register']);
    Route::post('/login',[LoginPaginaController::class, 'login']);
    Route::get('/logout',[LoginPaginaController::class, 'logout']);



Route::middleware('auth')->group(function(){
    Route::get('/itensperdidos',[ItemPerdidoController::class,'index']);
    Route::get('/item/{id}',[ItemPaginaController::class, 'index']);
    Route::post('/item/{id}/reivindicar',[ItemPaginaController::class, 'reivindicar']);
    Route::post('/itensperdidos/novo',[ItemPerdidoController::class ,'store']);
});

Route::middleware('auth','admin')->group(function(){
    Route::get('/admin',[AdministracaoController::class, 'index']);
    Route::post('/admin/novo',[AdministracaoController::class, 'store']);
    Route::delete('/admin/deletar',[AdministracaoController::class, 'destroy']);
    Route::put('/admin/editar', [AdministracaoController::class, 'update']);
    Route::post('/admin/tornar-admin', [AdministracaoController::class, 'tornarAdmin']);
});