<?php

namespace App\Http\Livewire;

use App\Models\Servico;
use Livewire\Component;

class Aplicars extends Component
{
    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.aplicars')->layout('layouts.app', compact('sr'));;
    }
}
