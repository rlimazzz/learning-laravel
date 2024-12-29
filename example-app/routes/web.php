<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

Route::get('/', [PrincipalController::class, 'index']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);
