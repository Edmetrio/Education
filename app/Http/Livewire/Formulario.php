<?php

namespace App\Http\Livewire;

use App\Models\Servico;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Formulario extends Component
{
    use WithFileUploads;
    public $nome, $texto, $icon, $descricao;
    public $edit_nome, $edit_texto, $edit_descricao, $edit_id, $old_icon, $new_icon;

    public $servico;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->nome = '';
        $this->descricao = '';
        $this->texto = '';
        $this->icon = '';
    }
    
    public function store()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'texto' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $validateDate['icon'] = $this->icon->store('files', 'public');
        Servico::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Serviço criada com sucesso!');  
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $servico = Servico::findorFail($id);
        $this->edit_id = $servico->id;
        $this->edit_nome = $servico->nome;
        $this->edit_descricao = $servico->descricao;
        $this->edit_texto = $servico->texto;
        $this->old_icon = $servico->icon;
    }

    public function update($id)
    {
        $validateDate = $this->validate([
            'edit_nome' => 'required',
            'edit_descricao' => 'required',
            'edit_texto' => 'required',
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $servico = Servico::findOrFail($id);
        $destination = public_path('storage\\'.$servico->icon);
        $filename = "";
        if ($this->new_icon === null) {
            $filename = $this->old_icon;
        } else {
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $filename = $this->new_icon->store('files', 'public');
        }
        $validateDate['nome'] = $this->edit_nome;
        $validateDate['descricao'] = $this->edit_descricao;
        $validateDate['texto'] = $this->edit_texto;
        $validateDate['icon'] = $filename;
        
        $servico->update($validateDate);
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        $this->resetInput();
        session()->flash('status', 'Serviço actualizado com sucesso!');    
    }

    public function delete($id)
    {
        $inscricao = Servico::findOrFail($id);
        $destination = public_path('storage\\'.$inscricao->icon);
        File::delete($destination);
        $inscricao->delete();
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        session()->flash('status', 'Serviço apagado com sucesso!');
    }

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.formulario')->layout('layouts.appp', compact('sr'));
    }
}
