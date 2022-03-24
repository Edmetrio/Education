<?php

namespace App\Http\Livewire;

use App\Models\Models\Pacote;
use App\Models\Models\Slider;
use App\Models\Servico;
use Livewire\Component;

class Pacotes extends Component
{
    public $nome, $valor, $servico_id;
    public $edit_nome, $edit_valor, $edit_servico_id;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->nome = '';
        $this->valor = '';
        $this->servico_id = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
            'valor' => 'required',
            'servico_id' => 'required',
        ]);

        Pacote::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Pacote criada com sucesso!');  
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $pacote = Pacote::with('servicos')->findorFail($id);
        $this->edit_id = $pacote->id;
        $this->edit_nome = $pacote->nome;
        $this->edit_valor = $pacote->valor;
        $this->edit_servico_id = $pacote->servico_id;
        $this->edit_servico_nome = $pacote->servicos->nome;       
    }

    public function update()
    {
        $validateDate = $this->validate([
            'edit_nome' => 'required',
            'edit_valor' => 'required',
            'edit_servico_id' => 'required'
        ]);

        $validateDate['nome'] = $this->edit_nome;
        $validateDate['valor'] = $this->edit_valor;
        $validateDate['servico_id'] = $this->edit_servico_id;
       
        Pacote::find($this->edit_id)->update($validateDate);
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        $this->resetInput();
        session()->flash('status', 'Pacote Actualizado com Sucesso!');    
    }

    public function delete($id)
    {
        Pacote::find($id)->delete();
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        session()->flash('status', 'Pacote apagado com sucesso!');
    }

    public function mount()
    {
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        $this->pacote = Pacote::orderBy('created_at', 'desc')->with('servicos')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.pacotes')->layout('layouts.appp', compact('sr'));
    }
}
