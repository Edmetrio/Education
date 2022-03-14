<?php

namespace App\Http\Livewire;

use App\Models\Models\Exame;
use App\Models\Models\Idioma;
use App\Models\Models\Pais;
use App\Models\Servico;
use Livewire\Component;

class Academicas extends Component
{
    public function mount()
    {
        $this->pais = Pais::orderBy('created_at', 'desc')->get();
        $this->exame = Exame::orderBy('created_at', 'desc')->get();
        $this->idioma = Idioma::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.academicas')->layout('layouts.app', compact('sr'));
    }
}
