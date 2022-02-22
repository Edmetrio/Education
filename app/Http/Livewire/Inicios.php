<?php

namespace App\Http\Livewire;

use App\Models\Servico;
use Livewire\Component;

class Inicios extends Component
{
    public function render()
    {
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.inicios')->layout('layouts.template');
    }
}
