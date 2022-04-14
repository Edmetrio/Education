<?php

namespace App\Http\Livewire;

use App\Models\Models\Rota;
use App\Models\Servico;
use Livewire\Component;

class Rotas extends Component
{
    public $nome;
    public $createData  = true, $updateData = false, $showData = true;

    private function resetInput()
    {
        $this->nome = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
        ]);

        Rota::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Rota criada com sucesso!'); 
    }

    public function render()
    {
        $this->rota = Rota::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.rotas')->layout('layouts.appp', compact('sr'));
    }
}
