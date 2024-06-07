<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;

class indexController extends Controller
{
    public function index()
    {
        return view('index', [
            'tarefas' => Tarefa::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
