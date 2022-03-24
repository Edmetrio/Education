<?php

namespace App\Http\Livewire;

use App\Models\Models\Depoimento;
use App\Models\Servico;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormDepoimento extends Component
{
    use WithFileUploads;
    public $nome, $texto, $icon, $descricao, $link;
    public $edit_nome, $edit_texto, $edit_descricao, $edit_id, $edit_link, $old_icon, $new_icon;

    public $depoimento;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->nome = '';
        $this->descricao = '';
        $this->texto = '';
        $this->icon = '';
        $this->link = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'texto' => 'required',
            'link' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $validateDate['icon'] = $this->icon->store('files', 'public');
        Depoimento::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Depoimento criado com sucesso!');  
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $depoimento = Depoimento::findorFail($id);
        $this->edit_id = $depoimento->id;
        $this->edit_nome = $depoimento->nome;
        $this->edit_descricao = $depoimento->descricao;
        $this->edit_texto = $depoimento->texto;
        $this->edit_link = $depoimento->link;
        $this->old_icon = $depoimento->icon;
    }

    public function update($id)
    {
        $validateDate = $this->validate([
            'edit_nome' => 'required',
            'edit_descricao' => 'required',
            'edit_texto' => 'required',
            'edit_link' => 'required'
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $depoimento = Depoimento::findOrFail($id);
        $destination = public_path('storage\\'.$depoimento->icon);
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
        $validateDate['link'] = $this->edit_link;
        $validateDate['icon'] = $filename;
        
        $depoimento->update($validateDate);
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        $this->resetInput();
        session()->flash('status', 'Depoimento criado com sucesso!');    
    }

    public function delete($id)
    {
        $depoimento = Depoimento::findOrFail($id);
        $destination = public_path('storage\\'.$depoimento->icon);
        File::delete($destination);
        $depoimento->delete();
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        session()->flash('status', 'Depoimento apagado com sucesso!');
    } 

    public function render()
    {
        $this->depoimento = Depoimento::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.form-depoimento')->layout('layouts.appp', compact('sr'));
    }
}
