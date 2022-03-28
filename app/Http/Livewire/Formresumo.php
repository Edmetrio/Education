<?php

namespace App\Http\Livewire;

use App\Models\Models\Pessoa;
use App\Models\Servico;
use Livewire\Component;

class Formresumo extends Component
{
    public $candidatos;
    public $selectedCandidato;
    public function mount()
    {
        $this->candidato = Pessoa::orderBy('created_at', 'desc')->get();
        $this->candidatos = collect();
    }

    public function render()
    {
        /* $up = Pessoa::latest()->first();
        $this->pessoa = Pessoa::with('academicas.pais','academicas.exames','academicas.idiomas',
        'superiors.idiomas','superiors.pessoas','superiors.graus','superiors.pacotes',
        'superiors.moedas','superiors.intakes','superiors.pais','sexos',
        'nacionalidades')->find($up->id); */
       
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.formresumo')->layout('layouts.appp', compact('sr'));
    }

    public function updatedSelectedCandidato($candidato)
    {
        if (!is_null($candidato)) {
            $this->pessoa = Pessoa::with('academicas.pais','academicas.exames','academicas.idiomas',
            'superiors.idiomas','superiors.pessoas','superiors.graus','superiors.pacotes',
            'superiors.moedas','superiors.intakes','superiors.pais','sexos',
            'nacionalidades')->find($candidato);
        }
    }
}
