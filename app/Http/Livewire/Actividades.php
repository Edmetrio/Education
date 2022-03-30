<?php

namespace App\Http\Livewire;

use App\Models\Models\Actividade;
use App\Models\Models\Conta;
use App\Models\Models\Movimento;
use App\Models\Models\Pessoa;
use App\Models\Models\Poost;
use App\Models\Models\Saldo;
use App\Models\Models\Situacao;
use App\Models\Models\Tipo;
use App\Models\Servico;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Actividades extends Component
{
    use WithFileUploads;
    use WithPagination;
    //Processo
    public $users_id, $situacao_id, $pessoa_id, $tipo_id, $nome, $descricao, $anexo;
    public $edit_users_id, $edit_situacao_id, $edit_pessoa_id, $old_anexo, $new_anexo, $situacao, $pessoa;


    //Poste
    public $icon;
    public $edit_nome, $edit_descricao, $edit_id, $old_icon, $new_icon;

    //Conta
    public $movimento_id, $saldo, $valor, $total;


    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $updateMode = false;
    public $updateModeProcesso = false;
    public $updateModeConta = false;

    public $selectedTipo = NULL;

    //Create
    public $contaData = false;
    public $processoData = false;
    public $posteData = false;

    //Update
    public $contaUpdate = false;
    public $processoUpdate = false;
    public $posteUpdate = false;

    //Table
    public $tabelaConta = false;
    public $tabelaProcesso = false;
    public $tabelaPoste = false;

    private function resetInput()
    {
        $this->users_id = '';
        $this->situacao_id = '';
        $this->pessoa_id = '';
        $this->nome = '';
        $this->descricao = '';
        $this->anexo = '';
        $this->situacao = '';
        $this->pessoa = '';
    }

    private function resetPoste()
    {
        $this->users_id = '';
        $this->nome = '';
        $this->descricao = '';
        $this->icon = '';
    }

    private function resetConta()
    {
        $this->users_id = '';
        $this->movimento_id = '';
        $this->descricao = '';
        $this->saldo = '';
        $this->valor = '';
    }

    public function storeProcesso()
    {
        $validateDate = $this->validate([
            'situacao_id' => 'required',
            'nome' => 'required',
            'descricao' => 'required',
            'anexo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $validateDate['users_id'] = Auth::user()->id;
        $validateDate['anexo'] = $this->anexo->store('files', 'public');
        $validateDate['pessoa_id'] = $this->pessoa_id;
        Actividade::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Actividade criada com sucesso!');
    }

    public function storeConta()
    {
        $validateDate = $this->validate([
            'movimento_id' => 'required',
            'descricao' => 'required',
            'valor' => 'required',
        ]);
        $saldo = Saldo::first();

        $validateDate['users_id'] = Auth::user()->id;
        if($this->movimento_id === '3ce23584-56cc-45ce-679d-84c9965053bf')
        {
            $saldoo = $saldo->valor + $this->valor;
        } else {
            $saldoo = $saldo->valor - $this->valor;
        }
        $validateDate['saldo'] = $saldoo;
        Conta::create($validateDate);
        Saldo::find($saldo->id)->update(['valor' => $saldoo]);
        $this->resetConta();
        session()->flash('status', 'Conta criada com sucesso!');
    }

    public function storePoste()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $validateDate['icon'] = $this->icon->store('files', 'public');
        Poost::create($validateDate);
        $this->resetPoste();
        session()->flash('status', 'Poost criado com sucesso!');
    }

    public function editPoste($id)
    {

        $poost = Poost::findorFail($id);
        $this->edit_id = $poost->id;
        $this->edit_nome = $poost->nome;
        $this->edit_descricao = $poost->descricao;
        $this->old_icon = $poost->icon;

        $this->updateMode = true;
    }

    public function editProcesso($id)
    {

        $processo = Actividade::with('pessoas','situacaos')->findorFail($id);
        $this->edit_id = $processo->id;
        $this->edit_situacao_id = $processo->situacao_id;
        $this->edit_pessoa_id = $processo->pessoa_id;
        $this->edit_nome = $processo->nome;
        $this->edit_descricao = $processo->descricao;
        $this->old_anexo = $processo->anexo;
        $this->situacao = $processo->situacaos->nome;
        $this->pessoa = $processo->pessoas->nome;

        $this->updateModeProcesso = true;
    }

    public function updateProcesso($id)
    {
        $validateDate = $this->validate([
            'edit_pessoa_id' => 'required',
            'edit_nome' => 'required',
            'edit_descricao' => 'required',
            'edit_situacao_id' => 'required',
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $poost = Actividade::findOrFail($id);
        $destination = public_path('storage\\'.$poost->icon);
        $filename = "";
        if ($this->new_anexo === null) {
            $filename = $this->old_anexo;
        } else {
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $filename = $this->new_anexo->store('files', 'public');
        }
        $validateDate['users_id'] = Auth::user()->id;
        $validateDate['pessoa_id'] = $this->edit_pessoa_id;
        $validateDate['nome'] = $this->edit_nome;
        $validateDate['anexo'] = $filename;
        $validateDate['descricao'] = $this->edit_descricao;
        $validateDate['situacao_id'] = $this->edit_situacao_id;
        
        $poost->update($validateDate);

        $this->resetPoste();
        $this->updateModeProcesso = false;
        session()->flash('status', 'Poost actualizado com sucesso!');
    }

    public function updatePoste($id)
    {
        $validateDate = $this->validate([
            'edit_nome' => 'required',
            'edit_descricao' => 'required',
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $poost = Poost::findOrFail($id);
        $destination = public_path('storage\\'.$poost->icon);
        $filename = "";
        if ($this->new_icon === null) {
            $filename = $this->old_icon;
        } else {
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $filename = $this->new_icon->store('files', 'public');
        }
        $validateDate['users_id'] = Auth::user()->id;
        $validateDate['nome'] = $this->edit_nome;
        $validateDate['descricao'] = $this->edit_descricao;
        $validateDate['icon'] = $filename;
        
        $poost->update($validateDate);

        $this->resetPoste();
        $this->updateMode = false;
        session()->flash('status', 'Poost actualizado com sucesso!');
    }

    public function delete($id)
    {
        $poost = Poost::find($id);
        $destination = public_path('storage\\'.$poost->icon);
        File::delete($destination);
        $poost->delete();
        session()->flash('status', 'Poost apagado com sucesso!');
    }

    public function deleteProcesso($id)
    {
        $poost = Actividade::find($id);
        $destination = public_path('storage\\'.$poost->icon);
        File::delete($destination);
        $poost->delete();
        session()->flash('status', 'Item apagado com sucesso!');
    }

    public function mount()
    {
        $this->tipo = Tipo::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        $actividade = Actividade::orderBy('created_at', 'desc')->paginate(5);
        $poost = Poost::orderBy('created_at', 'desc')->paginate(5);
        $this->pessoa = Pessoa::orderBy('created_at', 'desc')->get();
        $this->situacao = Situacao::orderBy('created_at', 'desc')->get();
        $this->movimento = Movimento::orderBy('created_at', 'desc')->get();
        $conta = Conta::with('movimentos','users')->orderBy('created_at', 'desc')->paginate(5);
        $saldo = Saldo::all();
        $total = 0.0;
        foreach($saldo as $s)
        {
            $total += $s->valor;
        }
        $this->total = $total;
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.actividades', compact('actividade','conta','poost'))->layout('layouts.appp', compact('sr'));
    }

    public function updatedSelectedTipo($tipo_id)
    {
        $conta = '3754a3da-d3b1-4efa-b998-e0498103addd';
        $processo = '3ce23584-56cc-45ce-663d-84c9965053bf';
        $poste = '9ed66d9f-614f-8adc-994f-a578099e95a4';
        if ($conta === $tipo_id) {
            $this->contaData = true;
            $this->processoData = false;
            $this->posteData = false;
        } elseif ($processo === $tipo_id) {
            $this->processoData = true;
            $this->contaData = false;
            $this->posteData = false;
        } elseif ($poste === $tipo_id) {
            $this->posteData = true;
            $this->contaData = false;
            $this->processoData = false;
        } else {
        }
    }
}
