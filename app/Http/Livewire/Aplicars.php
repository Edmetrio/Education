<?php

namespace App\Http\Livewire;

use App\Mail\Teste;
use App\Models\Models\Poost;
use App\Models\Servico;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Aplicars extends Component
{
    public $nome, $email, $assunto, $mensagem;

    public function resetInput()
    {
        $this->nome = '';
        $this->email = '';
        $this->assunto = '';
        $this->mensagem = '';
    }
    

    public function store()
    {
        $validatedDate = $this->validate([
            'nome' => 'required',
            'email' => 'required',
            'assunto' => 'required',
            'mensagem' => 'required'
        ]);
        $detail = $validatedDate;
        Mail::to('info@firsteducation.edu.mz')->send(new Teste($detail));
        session()->flash('status', 'E-mail Enviado com Sucesso!');
        $this->resetInput();
    }

    public function mount()
    {
        $this->servicos = Servico::orderBy('created_at', 'desc')->get();
        $this->poost = Poost::orderBy('created_at', 'desc')->get();
    }

    

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.aplicars')->layout('layouts.appp', compact('sr'));;
    }
}
