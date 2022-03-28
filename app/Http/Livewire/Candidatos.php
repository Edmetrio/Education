<?php

namespace App\Http\Livewire;

use App\Mail\Candidatura;
use App\Mail\Teste;
use App\Models\Models\Academica;
use App\Models\Models\Anexos;
use App\Models\Models\Exame;
use App\Models\Models\Grau;
use App\Models\Models\Idioma;
use App\Models\Models\Intake;
use App\Models\Models\Itemcurso;
use App\Models\Models\Itemexame;
use App\Models\Models\Itemidioma;
use App\Models\Models\Itemnacionalidade;
use App\Models\Models\Itempais;
use App\Models\Models\Moeda;
use App\Models\Models\Nacionalidade;
use App\Models\Models\Pacote;
use App\Models\Models\Pais;
use App\Models\Models\Pessoa;
use App\Models\Models\Sexo;
use App\Models\Models\Superior;
use App\Models\Servico;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Candidatos extends Component
{
    use WithFileUploads;
    public $showData = false;
    public $currentStep = 1;
    public $nome, $sexo_id, $nacionalidade_id, $nascimento, $passaporte, $telefone, $email;
    public $pessoa_id, $escola, $termino, $pais_id, $certificado, $idioma_id, $exame_id, $data, $nota;
    public $grau_id, $curso, $pacote_id, $moeda_id, $orcamento, $intake_id;
    public $passaportes, $certificados, $comprovativos, $outros;
    public $selectedExame = NULL;

    public $servico_id = '3b719c3b-2bd8-494d-a5d5-a3ef8aa288d3';
    public $idiomas_id, $paiss_id;

    public $nao = false;
    public $ainda = false;
    public $sim = false;

    public $pessoaa_id;
    public $successMessage = '';

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public $put = [];

    public function mount($id)
    {
        $this->pacotes = Servico::with('pacotes')->find($id);
        /* dd($this->pacotes); */
        $this->sexo = Sexo::orderBy('created_at', 'desc')->get();
        $this->nacionalidade = Nacionalidade::orderBy('created_at', 'desc')->get();

        $this->pais = Pais::orderBy('created_at', 'desc')->get();
        $this->exame = Exame::orderBy('created_at', 'desc')->get();
        $this->idioma = Idioma::orderBy('created_at', 'desc')->get();

        $this->grau = Grau::orderBy('created_at', 'desc')->get();
        $this->intake = Intake::orderBy('created_at', 'desc')->get();
        $this->pacote = Pacote::orderBy('created_at', 'desc')->get();
        $this->moeda = Moeda::orderBy('created_at', 'desc')->get();

        /* $this->pessoa = Pessoa::with('sexos','nacionalidades','academicas')->find('04cfd9e3-bbe9-4c86-92c0-677b3deed7ee');
        $this->academica = Academica::with('exames')->where('pessoa_id', '04cfd9e3-bbe9-4c86-92c0-677b3deed7ee')->get(); */
        /* dd($this->academica); */
        /* $this->exames = Exame::with('academicas.pessoas')->get(); 
        dd($this->exames); */ 
        
        

        
    }

    public function render()
    {
        /* $up = Pessoa::latest()->first();
        $this->pessoa = Pessoa::with('academicas.pais','academicas.exames','academicas.idiomas',
        'superiors.idiomas','superiors.pessoas','superiors.graus','superiors.pacotes',
        'superiors.moedas','superiors.intakes','superiors.pais','sexos',
        'nacionalidades')->find($up); */
        
        /* dd($this->pessoa); */
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.candidatos')->layout('layouts.appp', compact('sr'));
    }

    public function updatedSelectedExame($exame)
    {
        if (!is_null($exame)) {
            if ($exame === 'nao') {
                $this->nao = true;
                $this->ainda = false;
                $this->sim = false;
            } elseif ($exame === 'ainda') {
                $this->nao = false;
                $this->ainda = true;
                $this->sim = false;
            } elseif ($exame === 'sim') {
                $this->nao = false;
                $this->ainda = false;
                $this->sim = true;
            } else {
                # code...
            }
        }
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function addd($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->put, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function removee($i)
    {
        unset($this->put[$i]);
    }


    public function firstStepSubmit()
    {
        $validatedData = $this->validate(
            [
                'sexo_id' => 'required',
                'nome' => 'required|unique:pessoa',
                'nascimento' => 'required',
                'passaporte' => 'required',
                'telefone' => 'required',
                'email' => 'required',

                'nacionalidade_id.0' => 'required',
                'nacionalidade_id.*' => 'required'
            ],
            [
                'nacionalidade_id.0.required' => 'Preencha a nacionalidade',
                'nacionalidade_id.*' => 'Preencha a nacionalidade'
            ]
        );
        /* dd($this); */
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'escola' => 'required',
            'termino' => 'required',
            'paiss_id' => 'required',
            'certificado' => 'required',
            'idiomas_id' => 'required',
        ]);
        $this->currentStep = 3;
    }

    public function ThirdStepSubmit()
    {
        $validatedData = $this->validate(
            [
                'grau_id' => 'required',
                'curso' => 'required',
                'pacote_id' => 'required',
                'moeda_id' => 'required',
                'orcamento' => 'required',
                'intake_id' => 'required',
                'pais_id.0' => 'required',
                'pais_id.*' => 'required',
            ],
            [
                'pais_id.0.required' => 'Seleccione o pais',
                'pais_id.*.required' => 'Seleccione o Pais',
            ]
        );

        $this->currentStep = 4;
    }

    public function FourthStepSubmit()
    {
        $validatedDataAnexo = $this->validate([
            'passaportes' => 'required|mimes:pdf,xlx,csv,jpeg,png,jpg,gif,svg|max:2048',
            'certificados' => 'required|mimes:pdf,xlx,csv,jpeg,png,jpg,gif,svg|max:2048',
            'comprovativos' => 'required|mimes:pdf,xlx,csv,jpeg,png,jpg,gif,svg|max:2048',
            'outros' => 'required|mimes:pdf,xlx,csv,jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $this->currentStep = 5;
    }

  
    public function submitForm()
    {
        $pessoa = Pessoa::create([
            'sexo_id' => $this->sexo_id,
            'nome' => $this->nome,
            'nascimento' => $this->nascimento,
            'passaporte' => $this->passaporte,
            'telefone' => $this->telefone,
            'email' => $this->email,
        ]);
        foreach ($this->nacionalidade_id as $key => $value)
        {
            Itemnacionalidade::create(['pessoa_id' => $pessoa->id, 'nacionalidade_id' => $this->nacionalidade_id[$key]]);
        }
        /* dd($this->paiss_id); */
        $academica = Academica::create([
            'pessoa_id' => $pessoa->id,
            'escola' => $this->escola,
            'termino' => $this->termino,
            'pais_id' => $this->paiss_id,
            'certificado' => $this->certificado,
        ]);
        
        if ($this->selectedExame === 'ainda') {
            Itemexame::create([
                'academica_id' => $academica->id,
                'data' => $this->data
            ]);
        } elseif ($this->selectedExame === 'sim') {
            Itemexame::create([
                'academica_id' => $academica->id,
                'exame_id' => $this->exame_id,
                'nota' => $this->nota,
                'data' => $this->data
            ]);
        }
        //Aqui nao
        foreach ($this->idiomas_id as $i)
        {
            Itemidioma::create(['idioma_id' => $i, 'academica_id' => $academica->id]);
        }

        $superior = Superior::create([
            'pessoa_id' => $pessoa->id,
            'grau_id' => $this->grau_id,
            'curso' => $this->curso,
            'pacote_id' => $this->pacote_id,
            'orcamento' => $this->orcamento,
            'moeda_id' => $this->moeda_id,
            'intake_id' => $this->intake_id,
        ]);
        foreach ($this->pais_id as $key => $value) {
            
            Itempais::create(['pais_id' => $this->pais_id[$key], 'superior_id' => $superior->id]);
        }
        foreach ($this->idiomas_id as $id) 
        {
           Itemidioma::create([
                'idioma_id' => $id, 
                'superior_id' => $superior->id,
           ]);
        }
        Anexos::create([
            'pessoa_id' => $pessoa->id,
            'passaporte' => $this->passaportes->store('files', 'public'),
            'certificado' => $this->certificados->store('files', 'public'),
            'comprovativo' => $this->comprovativos->store('files', 'public'),
            'outros' => $this->outros->store('files', 'public'),
        ]);

        $detail = $pessoa;
        Mail::to('info@firsteducation.edu.mz')->send(new Candidatura($detail));

        $this->successMessage = "Candidatura feita";
        /* $this->clearForm();  */

        $this->currentStep = 6;
        $this->showData = true;
        
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }


    public function clearForm()
    {
        $this->sexo_id = '';
        $this->nome = '';
        $this->nacionalidade = '';
        $this->nascimento = '';
        $this->passaportes = '';
        $this->telefone = '';
        $this->email = '';
    }
}
