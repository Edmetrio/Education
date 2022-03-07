<?php

namespace App\Http\Livewire;

use App\Models\Models\Curso;
use App\Models\Models\Entidade;
use App\Models\Models\Grau;
use App\Models\Models\Inscricao;
use App\Models\Servico;
use Livewire\Component;
use Livewire\WithFileUploads;

class Itemcurso extends Component
{
    use WithFileUploads;
    public $inscricao_id, $servico_id, $curso_id, $grau_id, $entidade_id, $propina;
    public $edit_inscricao_id, $edit_inscricao_nome, $edit_servico_id, $edit_servico_nome,
     $edit_curso_id, $edit_curso_nome, $edit_grau_id, $edit_grau_nome, $edit_entidade_id, $edit_entidade_nome,
     $edit_id, $edit_propina;

    public $servico;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->inscricao_id = '';
        $this->servico_id = '';
        $this->curso_id = '';
        $this->grau_id = '';
        $this->entidade_id;
        $this->propina;
    }

    public function store()
    {
        $validateDate = $this->validate([
            'inscricao_id' => 'required',
            'servico_id' => 'required',
            'curso_id' => 'required',
            'grau_id' => 'required',
            'entidade_id' => 'required',
            'propina' => 'required',
        ]);

        Itemcurso::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Curso criada com sucesso!');  
    }

    public function mount()
    {
        $this->inscricao = Inscricao::orderBy('created_at')->get();
        $this->servico = Servico::orderBy('created_at')->get();
        $this->curso = Curso::orderBy('created_at')->get();
        $this->grau = Grau::orderBy('created_at')->get();
        $this->entidade = Entidade::orderBy('created_at')->get();
    }

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.itemcurso')->layout('layouts.app', compact('sr'));
    }
}
