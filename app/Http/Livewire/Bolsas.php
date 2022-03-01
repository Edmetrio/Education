<?php

namespace App\Http\Livewire;

use App\Models\Servico;
use Livewire\Component;

class Bolsas extends Component
{
    public function mount()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.bolsas')->layout('layouts.app', compact('sr'));
    }
}
