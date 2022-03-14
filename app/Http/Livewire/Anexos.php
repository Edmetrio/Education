<?php

namespace App\Http\Livewire;

use App\Models\Servico;
use Livewire\Component;

class Anexos extends Component
{
    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.anexos')->layout('layouts.app', compact('sr'));
    }
}
