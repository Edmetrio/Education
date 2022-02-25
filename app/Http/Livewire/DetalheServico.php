<?php

namespace App\Http\Livewire;

use App\Models\Servico;
use Livewire\Component;

class DetalheServico extends Component
{
    public $servico;

    public function mount($id)
    {
        $this->servico = Servico::findorFail($id);
    }
    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.detalhe-servico')->layout('layouts.app', compact('sr'));
    }
}
