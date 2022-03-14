<?php

namespace App\Http\Livewire;

use App\Models\Models\Grau;
use App\Models\Models\Idioma;
use App\Models\Models\Intake;
use App\Models\Models\Moeda;
use App\Models\Models\Pacote;
use App\Models\Models\Pais;
use App\Models\Servico;
use Livewire\Component;

class Superiors extends Component
{
    public function mount()
    {
        $this->grau = Grau::orderBy('created_at', 'desc')->get();
        $this->intake = Intake::orderBy('created_at', 'desc')->get();
        $this->pacote = Pacote::orderBy('created_at', 'desc')->get();
        $this->moeda = Moeda::orderBy('created_at', 'desc')->get();
        $this->pais = Pais::orderBy('created_at', 'desc')->get();
        $this->idioma = Idioma::orderBy('created_at', 'desc')->get();
    }   

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.superiors')->layout('layouts.app', compact('sr'));
    }
}
