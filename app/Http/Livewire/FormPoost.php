<?php

namespace App\Http\Livewire;

use App\Models\Models\Poost;
use App\Models\Servico;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormPoost extends Component
{
    use WithFileUploads;
    public $nome, $descricao, $icon;
    public $edit_nome, $edit_descricao, $edit_id, $old_icon, $new_icon;

    public $parceiro;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->nome = '';
        $this->descricao = '';
        $this->icon = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $validateDate['icon'] = $this->icon->store('files', 'public');
        Poost::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Poost criado com sucesso!');  
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $poost = Poost::findorFail($id);
        $this->edit_id = $poost->id;
        $this->edit_nome = $poost->nome;
        $this->edit_descricao = $poost->descricao;
        $this->old_icon = $poost->icon;
    }

    public function update($id)
    {
        $validateDate = $this->validate([
            'edit_nome' => 'required',
            'edit_descricao' => 'required',
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $poost = Poost::findOrFail($id);
        $destination = public_path('storage\\'.$poost->icon);
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
        $validateDate['icon'] = $filename;
        
        $poost->update($validateDate);
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        $this->resetInput();
        session()->flash('status', 'Poost Actualizado com sucesso!');    
    }

    public function delete($id)
    {
        $poost = Poost::find($id);
        $destination = public_path('storage\\'.$poost->icon);
        File::delete($destination);
        $poost->delete();
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        session()->flash('status', 'Poost apagado com sucesso!');
    }
    
    public function render()
    {
        $this->poost = Poost::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.form-poost')->layout('layouts.appp', compact('sr'));
    }
}
