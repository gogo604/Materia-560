<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/eventos', [EventoController::class, 'index'])
    ->name('eventos.index');

Route::get('/practica-ui', [EventoController::class, 'practica'])
    ->name('eventos.practica');

Route::get('/', function () {
    return view('welcome');
});


