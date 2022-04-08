<?php

namespace App\Http\Livewire;

use App\Models\Models\Poost;
use App\Models\Servico;
use Livewire\Component;

class Contas extends Component
{
    public function render()
    {

        $poost = Poost::orderBy('created_at', 'desc')->paginate(3);
        $servicos = Servico::orderBy('created_at', 'desc')->paginate(3);
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.contas', compact('poost','servicos'))->layout('layouts.appp', compact('sr'));
    }
}
