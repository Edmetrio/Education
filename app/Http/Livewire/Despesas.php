<?php

namespace App\Http\Livewire;

use App\Models\Models\Candidato;
use App\Models\Models\Cotacao;
use App\Models\Models\Despesas as ModelsDespesas;
use App\Models\Models\Remanescente;
use App\Models\Models\Subcategoria;
use App\Models\Models\Tipodespesa;
use App\Models\Servico;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Despesas extends Component
{
    public $subcategoria_id, $user_id, $nome, $descricao, $valor, $despesa_id, $nomem, $valorm, $inicio, $fim, $st, $nomet, $tipo_id;
    public $cotacao_id;
    public $updateMode = false;
    public $tabela = false;
    public $updateCategoria = false;
    public $pesquisa = '';
    /* public $categoria = ''; */
    public $selectedState = NULL;
    use WithPagination;

    private function resetInputFields()
    {
        $this->subcategoria_id = '';
        $this->nome = '';
        $this->descricao = '';
        $this->valor = '';
        $this->tipo_id = '';
        $this->cotacao_id = '';
    }

    private function resetInputFieldsModal()
    {
        $this->nomem = '';
        $this->valorm = '';
        $this->nomet = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            /* 'state' => 'required', */
            'nome' => 'required',
            'descricao' => 'required',
            'valor' => 'required',
            'tipo_id' => 'required'
        ]);

        $validateDate['subcategoria_id'] = $this->selectedState;
        $validateDate['tipodespesa_id'] = $this->tipo_id;
        $validateDate['user_id'] = Auth::user()->id;
        if ($this->selectedState === 'aa2870b1-8ea9-42c8-9f80-0a7d3c5e90d2') {
            $validateDate['cotacao_id'] = $this->cotacao_id;
            ModelsDespesas::create($validateDate);
            Remanescente::create($validateDate);
        } else {
            ModelsDespesas::create($validateDate);
        }
        

        $this->message = 'Despesa criada com sucesso!';
        $this->text = 'Por favor, Verifique a tabela das despesas';
        $this->alertSuccess();

        $this->resetInputFields();  
    }

    public function edit($id)
    {
        $post = ModelsDespesas::findOrFail($id);
        $this->subcategoria_id = $post->subcategoria_id;
        $this->despesa_id = $id;
        $this->nome = $post->nome;
        $this->valor = $post->valor;
        $this->descricao = $post->descricao;
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
            'subcategoria_id' => 'required',
            'descricao' => 'required',
            'valor' => 'required'
        ]);

        ModelsDespesas::find($this->despesa_id)->update($validateDate);
        $this->updateMode = false;

        $this->resetInputFields();
        session()->flash('status', 'Despesa actualizada com sucesso!');
    }

    public function pesquisar()
    {
        $this->despesas = ModelsDespesas::whereBetween('created_at', [$this->inicio, $this->fim])->get();
        $total = 0.0;
        foreach($this->despesas as $d) {
            $total += $d->valor;
        }
        $this->despesas->total = $total;
        $this->st = $total;
        /* dd($this->st); */ 
        /* dd($this->st); */

        $this->tabela = true;
        
    }

    

    public function delete($id)
    {
        ModelsDespesas::findOrFail($id)->delete();
        $this->resetInputFields();
        session()->flash('status', 'Despesa deletado com sucesso!');
    }

    public function storeM()
    {
        $validatedDate = $this->validate([
            'nomem' => 'required',
        ]);
        
        $input = $validatedDate;
        $input['nome'] = $this->nomem;
        
        Subcategoria::create($input);
  
        $this->message = 'Categoria criada com sucesso!';
        $this->text = 'Por favor, Verifique o select da categoria';
        $this->alertSuccess();
  
        $this->resetInputFieldsModal();
        $this->emit('agenteAdded');
    }

    public function storeT()
    {
        $validatedDate = $this->validate([
            'nomet' => 'required',
        ]);
        
        $input = $validatedDate;
        $input['nome'] = $this->nomet;
        
        Tipodespesa::create($input);
  
        $this->message = 'Tipo de despesa criado com sucesso!';
        $this->text = 'Por favor, Verifique o select do tipo de despesa';
        $this->alertSuccess();
  
        $this->resetInputFieldsModal();
        $this->emit('tipoAdded');
    }

    public function updatedSelectedState($state)
    {
        if ($state === 'aa2870b1-8ea9-42c8-9f80-0a7d3c5e90d2') {
            $this->updateCategoria = true;
        } else {
            $this->updateCategoria = false;
        }
        /* $despesas = ModelsDespesas::where('subcategoria_id', $state)->get();
        dd($despesas); */
    }

    /* public function mount()
    {
        $this->user = User::orderBy('created_at', 'desc')->get();
    } */

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'asc')->get();
        $total = 0.0;
        $despesa = ModelsDespesas::with('subcategorias','users')->where('nome', 'like', '%'. $this->pesquisa . '%')->orderBy('created_at', 'desc')->get();
        foreach($despesa as $d) {
            $total += $d->valor;
        }
        $this->dp = $total;
        $categoria = Subcategoria::orderBy('created_at', 'desc')->get();
        $cotacao = Cotacao::orderBy('created_at', 'desc')->get();
        $estudante = Candidato::orderBy('created_at', 'desc')->get();
        $tipo = Tipodespesa::orderBy('created_at', 'desc')->get();
        return view('livewire.despesas', compact('despesa','categoria', 'tipo','cotacao','estudante'))->layout('layouts.appp', compact('sr'));
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => $this->message, 
                'text' => $this->text
            ]);
    }
}
