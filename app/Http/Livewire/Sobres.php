<?php

namespace App\Http\Livewire;

use App\Models\Servico;
use Livewire\Component;

class Sobres extends Component
{
    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.sobres')->layout('layouts.appp', compact('sr'));
    }
}
