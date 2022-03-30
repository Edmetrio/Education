<?php

namespace App\Http\Livewire;

use App\Models\Models\Inscricao;
use App\Models\Models\Intake;
use App\Models\Models\Itemintake;
use App\Models\Models\Pais;
use App\Models\Servico;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Inscricaos extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $user_id, $pais_id, $universidade, $abertura, $fecho, $link, $anexo, $intake_id;
    public $edit_id, $edit_user_id, $edit_pais_id, $edit_pais_nome, $edit_universidade, $edit_abertura, $edit_fecho, $edit_link, $edit_anexo, $old_anexo, $new_anexo;

    public $pais;
    public $universidades;
    public $selectedPais = null;
    public $selectedUniversidade = null;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $tabela = true;

    public $inputs = [];
    public $i = 1;

    public $search = '';

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInput()
    {
        $this->user_id = '';
        $this->pais_id = '';
        $this->intake_id = '';
        $this->universidade = '';
        $this->abertura = '';
        $this->link = '';
        $this->fecho = '';
        $this->anexo = '';
    }
  
    public function store()
    {
        $validateDate = $this->validate(
            [
                'pais_id' => 'required',
                'universidade' => 'required',
                'abertura' => 'required',
                'fecho' => 'required',
                'link' => 'required',
                'anexo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'intake_id.0' => 'required',
                'intake_id.*' => 'required',
            ],
            [
                'intake_id.0.required' => 'Seleccione o Intake',
                'intake_id.*.required' => 'Seleccione o Intake',
            ]
        );
        $validateDate['anexo'] = $this->anexo->store('files', 'public');
        $validateDate['users_id'] = '474569f2-260c-46fc-833e-9d155f3894f2';
        $inscricao = Inscricao::create($validateDate);
        foreach ($this->intake_id as $key => $value)
        {
            Itemintake::create([
                'inscricao_id' => $inscricao->id,
                'intake_id' => $this->intake_id[$key]
            ]);
        }
        $this->resetInput();
        session()->flash('status', 'Universidade criada com sucesso!');
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $inscricao = Inscricao::with('pais')->findOrFail($id);
        $this->edit_id = $inscricao->id;
        $this->edit_user_id = $inscricao->users_id;
        $this->edit_pais_id = $inscricao->pais_id;
        $this->edit_pais_nome = $inscricao->pais->nome;
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
            'edit_universidade' => 'required',
            'edit_abertura' => 'required',
            'edit_fecho' => 'required',
            'edit_link' => 'required',
            /* 'anexo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' */
        ]);

        $inscricao = Inscricao::findOrFail($id);
        $destination = public_path('storage\\' . $inscricao->anexo);
        $filename = "";
        if ($this->new_anexo === null) {
            $filename = $this->old_anexo;
        } else {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_anexo->store('files', 'public');
        }

        $validateDate['users_id'] = $this->edit_user_id;
        $validateDate['pais_id'] = $this->edit_pais_id;
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
        $destination = public_path('storage\\' . $inscricao->anexo);
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
        $this->intake = Intake::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        $inscricao = Inscricao::with('pais','intakes','graus')->where('universidade', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate(6);
        
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.inscricaos', compact('inscricao'))->layout('layouts.appp', compact('sr'));
    }

    public function updatedSelectedPais($pais_id)
    {
        if(!is_null($pais_id))
        {
            $this->universidades = Inscricao::with('intakes','itemcursos.entidades')
            ->where('universidade', 'like', '%'.$this->search.'%')->where('pais_id', $pais_id)
            ->orderBy('created_at', 'desc')->get();
            /* dd($this->universidades); */
            $this->showData = false;
            $this->createData = true;
        }
    }

    /* public function updatedUniversidade($universidade_id)
    {
        if(!is_null($universidade_id))
        {
            $this->filtro = Inscricao::where('pais_id', $universidade_id)->get();
        }
    } */
}
