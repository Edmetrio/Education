<?php

namespace App\Http\Livewire;

use App\Models\Models\Depoimento;
use App\Models\Models\Poost;
use App\Models\Servico;
use Livewire\Component;

class Detalhedepoimento extends Component
{
    public function mount($id)
    {
        $this->depoimento = Depoimento::find($id);
        $this->servicos = Servico::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        
        $depoimentos = Depoimento::whereNotIn('id', [$this->depoimento->id])->orderBy('created_at', 'desc')->paginate(3);
        $sr = Servico::orderBy('created_at', 'desc')->get();
        $poost = Poost::orderBy('created_at', 'desc')->paginate(3);
        return view('livewire.detalhedepoimento', compact('depoimentos','poost'))->layout('layouts.appp', compact('sr'));
    }
}
