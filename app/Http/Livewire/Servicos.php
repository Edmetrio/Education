<?php

namespace App\Http\Livewire;

use App\Models\Servico;
use Livewire\Component;

class Servicos extends Component
{

    public function mount()
    {
        $this->servico = Servico::orderBy('created_at', 'asc')->get();
    }

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'asc')->get();
        return view('livewire.servicos')->layout('layouts.appp', compact('sr'));
    }
}
