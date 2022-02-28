<?php

namespace App\Http\Livewire;

use App\Models\Servico;
use Livewire\Component;

class Servicos extends Component
{

    public function mount()
    {
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.servicos')->layout('layouts.app', compact('sr'));
    }
}
