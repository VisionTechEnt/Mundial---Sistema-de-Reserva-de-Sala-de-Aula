<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\AgendamentoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
//Rotas para gerenciamento de usuário

Route::resource('rooms', SalaController::class);
//Rotas para gerenciamento de salas

Route::resource('bookings', AgendamentoController::class);
//Rotas para gerenciamento de agendamentos
