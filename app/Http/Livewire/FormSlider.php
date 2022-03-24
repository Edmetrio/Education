<?php

namespace App\Http\Livewire;

use App\Models\Models\Slider;
use App\Models\Servico;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormSlider extends Component
{
    use WithFileUploads;
    public $nome, $descricao, $icon, $texto;
    public $edit_nome, $edit_descricao, $edit_texto, $edit_id, $old_icon, $new_icon;

    public $slider;

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
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048'
        ]);

        $validateDate['icon'] = $this->icon->store('files', 'public');
        Slider::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Slider criado com sucesso!');  
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $slider = Slider::findorFail($id);
        $this->edit_id = $slider->id;
        $this->edit_nome = $slider->nome;
        $this->edit_descricao = $slider->descricao;
        $this->edit_texto = $slider->texto;
        $this->old_icon = $slider->icon;
    }

    public function update($id)
    {
        $validateDate = $this->validate([
            'edit_nome' => 'required',
            'edit_descricao' => 'required',
            'edit_texto' => 'required',
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $slider = Slider::findOrFail($id);
        $destination = public_path('storage\\'.$slider->icon);
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
        
        $slider->update($validateDate);
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        $this->resetInput();
        session()->flash('status', 'Slider Actualizado com sucesso!');    
    }

    public function delete($id)
    {
        $poost = Slider::find($id);
        $destination = public_path('storage\\'.$poost->icon);
        File::delete($destination);
        $poost->delete();
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        session()->flash('status', 'Slider apagado com sucesso!');
    }

    public function render()
    {
        $this->slider = Slider::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.form-slider')->layout('layouts.appp', compact('sr'));
    }
}
