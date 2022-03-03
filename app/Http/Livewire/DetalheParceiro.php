<?php

namespace App\Http\Livewire;

use App\Models\Models\Parceiro;
use App\Models\Models\Poost;
use App\Models\Servico;
use Livewire\Component;

class DetalheParceiro extends Component
{
    public function mount($id)
    {
        $this->parceiro = Parceiro::findorFail($id);
      
    }

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        $poost = Poost::orderBy('created_at', 'desc')->get();
        $parceiros = Parceiro::whereNotIn('id', [$this->parceiro->id])->orderBy('created_at', 'desc')->paginate(2);
        $servicos = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.detalhe-parceiro', compact('poost','parceiros','servicos'))->layout('layouts.app', compact('sr'));
    }
}
