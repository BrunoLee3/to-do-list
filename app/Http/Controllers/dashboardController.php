<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'tarefas' => Tarefa::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
