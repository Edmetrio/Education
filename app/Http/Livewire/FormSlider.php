<?php

namespace App\Http\Livewire;

use App\Models\Models\Poost;
use App\Models\Models\Slider;
use App\Models\Servico;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormSlider extends Component
{
    use WithFileUploads;
    public $nome, $descricao, $icon, $texto, $texto1, $texto2, $link;
    public $edit_nome, $edit_descricao, $edit_texto, $edit_texto1, $edit_texto2, $edit_link, $edit_id, $old_icon, $new_icon;

    public $slider;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->edit_nome = '';
        $this->edit_descricao = '';
        $this->edit_texto = '';
        $this->edit_texto1 = '';
        $this->edit_texto2 = '';
        $this->edit_link = '';
        $this->old_icon = '';
        $this->new_icon = '';

        $this->nome = '';
        $this->descricao = '';
        $this->texto = '';
        $this->texto1 = '';
        $this->texto2 = '';
        $this->link = '';
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
        $validateDate['users_id'] = Auth::user()->id;
        $validateDate['texto1'] = $this->texto1;
        $validateDate['texto2'] = $this->texto2;
        $validateDsate['link'] = $this->link;

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
        $this->old_icon = $slider->icon;
        $this->edit_descricao = $slider->descricao;
        $this->edit_texto = $slider->texto;
        $this->edit_texto1 = $slider->texto1;
        $this->edit_texto2 = $slider->texto2;
        $this->edit_link = $slider->link;
    }

    public function update()
    {
        $validateDate = $this->validate([
            'edit_nome' => 'required',
            'edit_descricao' => 'required',
            'edit_texto' => 'required',
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $slider = Slider::findOrFail($this->edit_id );
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
        $validateDate['texto1'] = $this->edit_texto1;
        $validateDate['texto2'] = $this->edit_texto2;
        $validateDate['link'] = $this->edit_link;
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
        $poost = Poost::orderBy('created_at', 'desc')->paginate(3);
        $this->servicos = Servico::orderBy('created_at', 'desc')->get();
        $this->slider = Slider::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.form-slider', compact('poost'))->layout('layouts.appp', compact('sr'));
    }
}
