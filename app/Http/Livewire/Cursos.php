<?php

namespace App\Http\Livewire;

use App\Models\Models\Categoria;
use App\Models\Models\Curso;
use App\Models\Servico;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Cursos extends Component
{
    public $nome, $categoria_id;
    public $edit_nome, $edit_categoria_id, $edit_id;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->nome = '';
        $this->categoria_id = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'categoria_id' => 'required',
            'nome' => 'required'
        ]);

        Curso::create($validatedDate);
        $this->resetInput();
        session()->flash('status', 'Curso criado com sucesso!');
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $curso = Curso::findOrFail($id);
        $this->edit_id = $curso->id;
        $this->edit_nome = $curso->nome;
        $this->edit_categoria_id = $curso->categoria_id;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'edit_nome' => 'required',
            'edit_categoria_id' => 'required'
        ]);

        $validatedDate['nome'] = $this->edit_nome;
        $validatedDate['categoria_id'] = $this->edit_categoria_id;
        Curso::findOrFail($this->edit_id)->update($validatedDate);
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        $this->resetInput();
        session()->flash('status', 'Curso actualizado com sucesso!'); 
    }

    public function delete($id)
    {
        Curso::findOrFail($id)->delete();
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        session()->flash('status', 'Slider apagado com sucesso!');
    }

    public function render()
    {
        $this->curso = Curso::orderBy('created_at', 'desc')->get();
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
        $this->categoria = Categoria::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.cursos')->layout('layouts.appp', compact('sr'));;
    }
}
