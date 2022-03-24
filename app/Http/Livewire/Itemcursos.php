<?php

namespace App\Http\Livewire;

use App\Models\Models\Curso;
use App\Models\Models\Entidade;
use App\Models\Models\Grau;
use App\Models\Models\Inscricao;
use App\Models\Models\Itemcurso;
use App\Models\Models\Moeda;
use App\Models\Servico;
use Livewire\Component;
use Livewire\WithFileUploads;

class Itemcursos extends Component
{
    use WithFileUploads;
    public $inscricao_id, $servico_id, $curso_id, $grau_id, $entidade_id, $propina, $moeda_id;
    public $edit_inscricao_id, $edit_inscricao_nome, $edit_servico_id, $edit_servico_nome,
        $edit_curso_id, $edit_curso_nome, $edit_grau_id, $edit_grau_nome, $edit_entidade_id, $edit_entidade_nome,
        $edit_id, $edit_propina, $edit_moeda_id, $edit_moeda_nome;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $search = '';

    public $inputs = [];
    public $i = 1;

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
        $this->inscricao_id = '';
        $this->servico_id = '';
        $this->curso_id = '';
        $this->grau_id = '';
        $this->entidade_id;
        $this->propina;
    }

    public function store()
    {
        $validateDate = $this->validate(
            [
                'inscricao_id' => 'required',
                'servico_id' => 'required',
                'grau_id' => 'required',
                'entidade_id' => 'required',
                'moeda_id' => 'required',

                'curso_id.0' => 'required',
                'propina.0' => 'required',
                'curso_id.*' => 'required',
                'propina.*' => 'required',
            ],
            [
                'curso_id.0.required' => 'Preencha o curso',
                'propina.0.required' => 'Preencha a propina',
                'curso_id.*.required' => 'Preencha o curso',
                'propina.*.required' => 'Preencha a propina',
            ]
        );

        foreach ($this->curso_id as $key => $value)
        {
            $validateDate['curso_id'] = $this->curso_id[$key];
            $validateDate['propina'] = $this->propina[$key];
            Itemcurso::create($validateDate);
        }
        $this->resetInput();
        session()->flash('status', 'Curso criada com sucesso!');
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->createData = true;
        $this->updateData = true;
        $item = Itemcurso::with('inscricaos', 'servicos', 'cursos', 'graus', 'entidades','moedas')->get();
        $this->inscricao_id = $item->inscricao_id;
        $this->edit_inscricao_nome = $item->inscricaos->nome;
        $this->servico_id = $item->servico_id;
        $this->edit_servico_id = $item->servicos->nome;
        $this->curso_id = $item->curso_id;
        $this->edit_curso_id = $item->cursos_nome;
        $this->grau_id = $item->grau_id;
        $this->edit_grau_id = $item->graus_nome;
        $this->entidade_id = $item->entidade_id;
        $this->edit_entidade_id = $item->entidades_nome;
        $this->moeda_id = $item->moeda_id;
        $this->edit_moeda_id = $item->moedas_nome;
        $this->propina = $item->propina;

    }

    public function mount()
    {
        $this->inscricao = Inscricao::orderBy('created_at', 'desc')->get();
        $this->servico = Servico::orderBy('created_at', 'desc')->get();
        $this->curso = Curso::orderBy('created_at', 'desc')->get();
        $this->grau = Grau::orderBy('created_at', 'desc')->get();
        $this->entidade = Entidade::orderBy('created_at', 'desc')->get();
        $this->moeda = Moeda::orderBy('created_at', 'desc')->get();

        $this->universidades = Inscricao::with('cursos','itemcursos','intakes')->get();
        /* dd($this->universidades); */
    }

    public function render()
    {
        $this->cursoo = Curso::where('nome', 'like', '%'.$this->search.'%')->get();
        /* dd($this->cursoo); */
        $sr = Servico::orderBy('created_at', 'desc')->get();
        $this->item = Itemcurso::with('inscricaos', 'servicos', 'cursos', 'graus', 'entidades','moedas')->get();
        return view('livewire.itemcursos')->layout('layouts.appp', compact('sr'));
    }
}
