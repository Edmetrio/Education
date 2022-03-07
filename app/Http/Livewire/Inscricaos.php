<?php

namespace App\Http\Livewire;

use App\Models\Models\Entidade;
use App\Models\Models\Inscricao;
use App\Models\Models\Intake;
use App\Models\Models\Pais;
use App\Models\Servico;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Inscricaos extends Component
{
    use WithFileUploads;
    public $user_id, $pais_id, $entidade_id, $universidade, $abertura, $fecho, $link, $anexo;
    public $edit_id, $edit_user_id, $edit_pais_id, $edit_pais_nome, $edit_entidade_id, $edit_entidade_nome, $edit_universidade, $edit_abertura, $edit_fecho, $edit_link, $edit_anexo, $old_anexo, $new_anexo;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->user_id = '';
        $this->pais_id = '';
        $this->entidade_id = '';
        $this->universidade = '';
        $this->abertura = '';
        $this->link = '';
        $this->fecho = '';
        $this->anexo = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'pais_id' => 'required',
            'entidade_id' => 'required',
            'universidade' => 'required',
            'abertura' => 'required',
            'fecho' => 'required',
            'link' => 'required',
            'anexo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $validateDate['anexo'] = $this->anexo->store('files', 'public');
        $validateDate['users_id'] = '474569f2-260c-46fc-833e-9d155f3894f2';
        Inscricao::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Universidade criada com sucesso!'); 
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $inscricao = Inscricao::with('pais','entidades')->findOrFail($id);
        $this->edit_id = $inscricao->id;
        $this->edit_user_id = $inscricao->users_id;
        $this->edit_pais_id = $inscricao->pais_id;
        $this->edit_pais_nome = $inscricao->pais->nome;
        $this->edit_entidade_id = $inscricao->entidade_id;
        $this->edit_entidade_nome = $inscricao->entidades->nome;
        $this->edit_universidade = $inscricao->universidade;
        $this->edit_abertura = $inscricao->abertura;
        $this->edit_fecho = $inscricao->fecho;
        $this->edit_link = $inscricao->link;
        $this->old_anexo = $inscricao->anexo;
    }

    public function update($id)
    {
        $validateDate = $this->validate([
            'edit_pais_id' => 'required',
            'edit_entidade_id' => 'required',
            'edit_universidade' => 'required',
            'edit_abertura' => 'required',
            'edit_fecho' => 'required',
            'edit_link' => 'required',
            /* 'anexo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $inscricao = Inscricao::findOrFail($id);
        $destination = public_path('storage\\'.$inscricao->anexo);
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

        $validateDate['users_id'] = $this->edit_user_id;
        $validateDate['pais_id'] = $this->edit_pais_id;
        $validateDate['entidade_id'] = $this->edit_entidade_id;
        $validateDate['universidade'] = $this->edit_universidade;
        $validateDate['abertura'] = $this->edit_abertura;
        $validateDate['fecho'] = $this->edit_fecho;
        $validateDate['link'] = $this->edit_link;
        $validateDate['anexo'] = $filename;

        $inscricao->update($validateDate);
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        $this->resetInput();
        session()->flash('status', 'Universidade actualizada com sucesso!'); 
    }

    public function delete($id)
    {
        $inscricao = Inscricao::findOrFail($id);
        $destination = public_path('storage\\'.$inscricao->anexo);
        File::delete($destination);
        $inscricao->delete();
        $this->showData = true;
        $this->createData = false;
        $this->updateData = false;
        session()->flash('status', 'Inscrição apagada com sucesso!');
    }

    public function mount()
    {
        $this->pais = Pais::orderBy('created_at', 'desc')->get();
        $this->entidade = Entidade::orderBy('created_at', 'desc')->get();
        $this->inscricao = Inscricao::with('pais','entidades')->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.inscricaos')->layout('layouts.app', compact('sr'));
    }
}
