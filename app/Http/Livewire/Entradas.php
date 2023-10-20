<?php

namespace App\Http\Livewire;

use App\Models\Models\Entrada;
use App\Models\Models\Servico;
use App\Models\Models\Tipoentrada;
use Livewire\Component;

class Entradas extends Component
{
    public $tipoentrada_id, $user_id, $nome, $descricao, $valor, $entrada_id, $nomem;
    public $updateMode = false;

    private function resetInputFields()
    {
        $this->tipoentrada_id = '';
        $this->user_id = '';
        $this->nome = '';
        $this->descricao = '';
        $this->valor = '';
        $this->entrada_id = '';
    }

    private function resetInputFieldsModal()
    {
        $this->nomem = '';
    }

    public function storeM()
    {
        $validatedDate = $this->validate([
            'nomem' => 'required',
        ]);
        
        $input = $validatedDate;
        $input['nome'] = $this->nomem;
        Tipoentrada::create($input);
  
        $this->message = 'Entrafa criada com sucesso!';
        $this->text = 'Por favor, Verifique o select do tipo de entrada';
        $this->alertSuccess();
  
        $this->resetInputFieldsModal();
        $this->emit('entradaAdded');
    }

    public function render()
    {
        $tipoentrada = Entrada::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'asc')->get();
        return view('livewire.entradas', compact('tipoentrada'))->layout('layouts.appp', compact('sr'));
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => $this->message, 
                'text' => $this->text
            ]);
    }
}
