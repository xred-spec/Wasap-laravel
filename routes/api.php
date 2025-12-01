<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MensajesController;

Route::post('/login', [UsuariosController::class, 'login']);

Route::get('/get-mensajes', [MensajesController::class, 'index']);
Route::post('/create-mensaje', [MensajesController::class, 'store']);
