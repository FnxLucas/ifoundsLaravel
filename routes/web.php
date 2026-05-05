<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemPerdidoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/itensperdidos',[ItemPerdidoController::class, 'index']);