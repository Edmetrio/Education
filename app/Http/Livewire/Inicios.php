<?php

namespace App\Http\Livewire;

use App\Models\Models\Depoimento;
use App\Models\Models\Parceiro;
use App\Models\Servico;
use Livewire\Component;

class Inicios extends Component
{
    public function render()
    {
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
        $this->depoimento = Depoimento::orderBy('created_at', 'desc')->get();
        $this->parceiro = Parceiro::orderBy('created_at', 'desc')->get();
        return view('livewire.inicios')->layout('layouts.template');
    }
}
