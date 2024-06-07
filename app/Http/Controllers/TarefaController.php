<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validado = request()->validate([
            'title' => 'required|min:3|max:30',
        ]);

        Tarefa::create($validado);

        return redirect()->route('index.show');
    }

    public function edit($id){

        $tarefa = Tarefa::findOrFail($id);

        return view('include.item.edit', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $tarefa = Tarefa::findOrFail($id);

        $tarefa->update(request()->all());

        return redirect()->route('index.show');

    }

    public function updateColumn($id){
        
        $tarefa = Tarefa::findOrFail($id);

        if($tarefa->completed > 0){
            $tarefa->completed = 0;
            $tarefa->save();
        }else{
            $tarefa->completed = 1;
            $tarefa->save();
        }

        return redirect()->route('index.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Tarefa::destroy($id);

        return redirect()->route('index.show');
    }
}
