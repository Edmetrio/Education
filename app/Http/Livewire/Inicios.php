<?php

namespace App\Http\Livewire;

use App\Models\Models\Depoimento;
use App\Models\Models\Parceiro;
use App\Models\Models\Poost;
use App\Models\Models\Slider;
use App\Models\Servico;
use Livewire\Component;
use Livewire\WithPagination;


class Inicios extends Component
{
    use WithPagination;
    public $nome, $icon;

    public function edit($id)
    {
        $depoimento = Depoimento::find($id);
        $this->nome = $depoimento->nome;
        $this->icon = $depoimento->icon;
    }

    public function render()
    {
        $poost = Poost::orderBy('created_at', 'desc')->paginate(4);
        $servico = Servico::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        $depoimento = Depoimento::orderBy('created_at', 'desc')->paginate(6);
        $parceiro = Parceiro::orderBy('created_at', 'desc')->paginate(4);
        $slider = Slider::orderBy('created_at', 'desc')->paginate(6);
        return view('livewire.inicios', compact('poost', 'parceiro', 'depoimento', 'servico'))->layout('layouts.template', compact('slider', 'sr'));
    }
}
