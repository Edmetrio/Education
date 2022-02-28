<?php

namespace App\Http\Livewire;

use App\Models\Models\Depoimento;
use App\Models\Models\Parceiro;
use App\Models\Models\Poost;
use App\Models\Models\Slider;
use App\Models\Servico;
use Livewire\Component;

class Inicios extends Component
{

    public function render()
    {
        $poost = Poost::orderBy('created_at', 'desc')->paginate(4);
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        $depoimento = Depoimento::orderBy('created_at', 'desc')->paginate(6);
        $parceiro = Parceiro::orderBy('created_at', 'desc')->paginate(4);
        $slider = Slider::orderBy('created_at', 'desc')->paginate(6);
        return view('livewire.inicios', compact('poost','parceiro','depoimento'))->layout('layouts.template', compact('slider','sr'));
    }
}
