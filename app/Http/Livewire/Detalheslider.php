<?php

namespace App\Http\Livewire;

use App\Models\Models\Poost;
use App\Models\Models\Slider;
use App\Models\Servico;
use Livewire\Component;

class Detalheslider extends Component
{
    public $slider_id;
    
    public function mount($id)
    {
        $this->slider_id = $id;
        $this->sliders = Slider::findOrfail($id);
    }

    public function render()
    {
        $slider = Slider::whereNotIn('id', [$this->slider_id])->orderBy('created_at', 'desc')->paginate(3);
        $this->servicos = Servico::orderBy('created_at', 'desc')->get();
        $poost = Poost::orderBy('created_at', 'desc')->paginate(3);
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.detalheslider', compact('poost','slider'))->layout('layouts.appp', compact('sr'));
    }
}
