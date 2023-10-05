<?php

namespace App\Http\Livewire;

use App\Models\Models\Pacote;
use App\Models\Models\Pacoteinscricao;
use App\Models\Models\Poost;
use App\Models\Servico;
use Livewire\Component;

class DetalheServico extends Component
{
    public $servico;

    public function mount($id)
    {
        $this->servico = Servico::with('pacotes')->findorFail($id);
        /* dd($this->servico); */
        $this->servicos = Servico::orderBy('created_at', 'desc')->get();
    }
    public function render()
    {
        $this->inscricao = Pacoteinscricao::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        $poost = Poost::orderBy('created_at', 'desc')->paginate(4);
        return view('livewire.detalhe-servico', compact('poost'))->layout('layouts.appp', compact('sr'));
    }

    public function download()
    {
        $myFile = public_path("/img/Solution, LDA.pdf");
    	return response()->download($myFile);
        /* return response()->download($myFile)->deleteFileAfterSend(true); */
    }
}
