<?php

namespace App\Http\Livewire;

use App\Mail\Teste;
use App\Models\Servico;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contactos extends Component
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

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.contactos')->layout('layouts.appp', compact('sr'));
    }
}
