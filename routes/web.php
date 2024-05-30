<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [dashboardController::class, 'index'])->name('dashboard.show');


Route::post('/tarefa', [TarefaController::class, 'store'])->name('tarefa.store');