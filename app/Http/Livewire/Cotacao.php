<?php

namespace App\Http\Livewire;

use App\Models\Models\Cotacao as ModelsCotacao;
use App\Models\Models\Remanescente;
use App\Models\Models\Titulo;
use App\Models\Servico;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Cotacao extends Component
{
    public $titulo_id, $user_id, $nome, $valor, $cotacao_id;
    public $nomem, $nomer, $valorr;
    public $updateMode = false;
    use WithPagination;

    private function resetInputFields()
    {
        $this->titulo_id = '';
        $this->user_id = '';
        $this->nome = '';
        $this->valor = '';
        $this->titulo_id = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'titulo_id' => 'required',
            'nome' => 'required',
            'valor' => 'required',
        ]);

        $validateDate['user_id'] = Auth::user()->id;
        ModelsCotacao::create($validateDate);
        $this->resetInputFields();
        session()->flash('status', 'Cotação criada com sucesso!');  
    }

    public function edit($id)
    {
        $post = ModelsCotacao::findOrFail($id);
        $this->titulo_id = $post->titulo_id;
        $this->cotacao_id = $post->id;
        $this->nome = $post->nome;
        $this->valor = $post->valor;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
            'titulo_id' => 'required',
            'nome' => 'required',
            'valor' => 'required'
        ]);

        ModelsCotacao::find($this->cotacao_id)->update($validateDate);
        $this->updateMode = false;

        $this->resetInputFields();
        session()->flash('status', 'Cotação actualizada com sucesso!');
    }

    private function resetInputFieldsModal()
    {
        $this->nomem = '';
    }

    public function storeM()
    {
        $validatedDate = $this->validate([
            'nomem' => 'required',
        ]);
        
        $input = $validatedDate;
        $input['nome'] = $this->nomem;
        
        Titulo::create($input);
  
        session()->flash('message', 'Título criado com sucesso.');
  
        $this->resetInputFieldsModal();
        $this->emit('tituloAdded');
    }

    public function delete($id)
    {
        $this->cotacao_id = $id;
    }

    public function storeR()
    {
        $validatedDate = $this->validate([
            'cotacao_id' => 'required',
            'nomer' => 'required',
            'valorr' => 'required',
        ]);
        
        $input = $validatedDate;
        $input['nome'] = $this->nomer;
        $input['valor'] =$this->valorr;
        $input['user_id'] = Auth::user()->id;
        Remanescente::create($input);
        session()->flash('message', 'Remanescente criado com sucesso.');
  
        $this->resetInputFieldsModal();
        $this->emit('remanescenteAdded');
    }
    public function render()
    {
        $titulo = Titulo::orderBy('created_at', 'desc')->get();
        $cotacao = ModelsCotacao::with('titulos','users','remanescentes')->orderBy('created_at', 'desc')->paginate(2);
        /* dd($cotacao); */
        $total = 0.0;
        $tt = 0.0;
        foreach($cotacao as $r){
            foreach($r->remanescentes as $rm){
                $total += $rm->valor;
                $rm->total = $r->valor - $total;
            } 
        $tt += $r->valor; 
        }
        $cotacao->tt = $tt;
        
        $sr = Servico::orderBy('created_at', 'asc')->get();
        return view('livewire.cotacao', compact('titulo','cotacao'))->layout('layouts.appp', compact('sr'));
    }
}
