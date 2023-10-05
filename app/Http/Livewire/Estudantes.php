<?php

namespace App\Http\Livewire;

use App\Models\Models\Candidato;
use App\Models\Models\Estado;
use App\Models\Models\Itemcandidato;
use App\Models\Servico;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Estudantes extends Component
{
    public $estado_id, $user_id, $candidato_id, $nome, $descricao;
    public $nomem, $nomec, $pesquisa, $combobox;
    public $updateMode = false;
    public $updateSelect, $updateTable = true;
    use WithPagination;


    private function resetInputFields()
    {
        $this->estado_id = '';
        $this->user_id = '';
        $this->nome = '';
        $this->descricao = '';
        $this->candidato_id = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'estado_id' => 'required',
            'nome' => 'required',
            'descricao' => 'required'
        ]);

        $validateDate['user_id'] = Auth::user()->id;
        Candidato::create($validateDate);
        $this->resetInputFields();
        session()->flash('status', 'Estudante criado com sucesso!');  
    }

    private function resetInputFieldsModal()
    {
        $this->nomem = '';
        $this->nomec = '';
    }

    public function updatedCombobox($id)
    {
        $this->combobox = Candidato::with('estados', 'itemcandidatos')->where('id', $id)->orderBy('created_at', 'desc')->get();
        $this->updateTable = false;
        $this->updateSelect = true;
    }

    public function storeM()
    {
        $validatedDate = $this->validate([
            'nomem' => 'required',
        ]);
        
        $input = $validatedDate;
        $input['nome'] = $this->nomem;
        
        Estado::create($input);
  
        session()->flash('message', 'Estado criado com sucesso.');
  
        $this->resetInputFieldsModal();
        $this->emit('estadoAdded');
    }

    public function storecandidato($id)
    {
        $this->candidato_id = $id;
    }

    public function storec()
    {
        $validatedDate = $this->validate([
            'nomec' => 'required',
        ]);
        
        $input = $validatedDate;
        $input['nome'] = $this->nomec;
        $input['user_id'] = Auth::user()->id;
        $input['candidato_id'] = $this->candidato_id;
        
        Itemcandidato::create($input);
  
        session()->flash('message', 'Item Candidato criado com sucesso.');
  
        $this->resetInputFieldsModal();
        $this->emit('candidatoAdded');
    }

    public function mount()
    {
        $this->candidato = Candidato::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'asc')->get();
        $this->estado = Estado::orderBy('created_at', 'desc')->get();
        $estudante = Candidato::with('estados', 'itemcandidatos')->where('nome', 'like', '%'. $this->pesquisa . '%')->orderBy('created_at', 'desc')->paginate(10);
        /* dd($estudante); */
        return view('livewire.estudantes', compact('estudante'))->layout('layouts.appp', compact('sr'));
    }
}
