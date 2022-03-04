<?php

namespace App\Http\Livewire;

use App\Models\Models\Parceiro;
use App\Models\Servico;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormParceiro extends Component
{
    use WithFileUploads;
    public $nome, $localizacao, $texto, $texto2, $texto3, $icon, $descricao, $link;
    public $edit_nome, $edit_localizacao, $edit_texto, $edit_texto2, $edit_texto3, $edit_descricao, $edit_id, $edit_link, $old_icon, $new_icon;

    public $parceiro;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->nome = '';
        $this->localizacao = '';
        $this->descricao = '';
        $this->texto = '';
        $this->texto2 = '';
        $this->texto3 = '';
        $this->icon = '';
        $this->link = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
            'localizacao' => 'required',
            'descricao' => 'required',
            'texto' => 'required',
            'texto2' => 'required',
            'texto3' => 'required',
            'link' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $validateDate['icon'] = $this->icon->store('files', 'public');
        Parceiro::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Parceiro criado com sucesso!');  
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $parceiro = Parceiro::findorFail($id);
        $this->edit_id = $parceiro->id;
        $this->edit_nome = $parceiro->nome;
        $this->edit_localizacao = $parceiro->localizacao;
        $this->edit_descricao = $parceiro->descricao;
        $this->edit_texto = $parceiro->texto;
        $this->edit_texto2 = $parceiro->texto2;
        $this->edit_texto3 = $parceiro->texto3;
        $this->edit_link = $parceiro->link;
        $this->old_icon = $parceiro->icon;
    }

    public function update($id)
    {
        $validateDate = $this->validate([
            'edit_nome' => 'required',
            'edit_localizacao' => 'required',
            'edit_descricao' => 'required',
            'edit_texto' => 'required',
            'edit_texto2' => 'required',
            'edit_texto3' => 'required',
            'edit_link' => 'required'
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $parceiro = Parceiro::findOrFail($id);
        $destination = public_path('storage\\'.$parceiro->icon);
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
        $validateDate['localizacao'] = $this->edit_localizacao;
        $validateDate['descricao'] = $this->edit_descricao;
        $validateDate['texto'] = $this->edit_texto;
        $validateDate['texto2'] = $this->edit_texto2;
        $validateDate['texto3'] = $this->edit_texto3;
        $validateDate['link'] = $this->edit_link;
        $validateDate['icon'] = $filename;
        
        $parceiro->update($validateDate);
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        $this->resetInput();
        session()->flash('status', 'Parceiro Actualizado com sucesso!');    
    }

    public function delete($id)
    {
        $parceiro = Parceiro::findOrFail($id);
        $destination = public_path('storage\\'.$parceiro->icon);
        File::delete($destination);
        $parceiro->delete();
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        session()->flash('status', 'Parceiro apagado com sucesso!');
    }

    public function render()
    {
        $this->parceiro = Parceiro::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.form-parceiro')->layout('layouts.app', compact('sr'));
    }
}
