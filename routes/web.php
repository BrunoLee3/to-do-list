<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [indexController::class, 'index'])->name('index.show');


Route::post('/tarefa', [TarefaController::class, 'store'])->name('tarefa.store');
Route::get('/tarefa/{id}/edit', [TarefaController::class, 'edit'])->name('tarefa.edit');
Route::put('/tarefa/{id}', [TarefaController::class, 'update'])->name('tarefa.update');
Route::patch('/tarefa/{id}', [TarefaController::class, 'updateColumn'])->name('tarefa.patch');
Route::delete('/tarefa/{id}', [TarefaController::class, 'destroy'])->name('tarefa.destroy');