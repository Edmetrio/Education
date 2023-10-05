<?php

namespace App\Http\Livewire;

use App\Models\Models\Subcategoria;
use App\Models\Servico;
use Livewire\Component;
use Livewire\WithPagination;

class Subcategorias extends Component
{
    use WithPagination;
    public $nome, $valor, $subcategoria_id;
    public $updateMode = false;

    private function resetInputFields()
    {
        $this->nome = '';
    }

    public function mount()
    {
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
    }

    public function store()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
        ]);

        Subcategoria::create($validateDate);
        $this->resetInputFields();
        session()->flash('status', 'Subcategoria criada com sucesso!');  
    }

    public function edit($id)
    {
        $post = Subcategoria::findOrFail($id);
        $this->subcategoria_id = $id;
        $this->nome = $post->nome;
        $this->valor = $post->valor;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
        ]);

        Subcategoria::find($this->subcategoria_id)->update($validateDate);
        $this->updateMode = false;

        $this->resetInputFields();
        session()->flash('status', 'Subcategoria actualizado com sucesso!');
    }

    public function delete($id)
    {
        Subcategoria::findOrFail($id)->delete();
        $this->resetInputFields();
        session()->flash('status', 'Subcategoria deletado com sucesso!');
    }

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'asc')->get();
        $subcategoria = Subcategoria::orderBy('created_at', 'desc')->get();
        return view('livewire.subcategorias', compact('subcategoria'))->layout('layouts.appp', compact('sr'));
    }
}
