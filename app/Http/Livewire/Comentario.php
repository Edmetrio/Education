<?php

namespace App\Http\Livewire;

use App\Models\Models\Comentario as ModelsComentario;
use App\Models\Models\Poost;
use App\Models\Servico;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comentario extends Component
{
    public $nome, $poosts_id;

    public function mount($id)
    {
        $this->poosts_id = $id;
        $this->poost = Poost::find($id);
    }
    
    private function limpar()
    {
        $this->nome = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nome' => 'required'
        ]);

        $validatedDate['users_id'] = Auth::user()->id;
        $validatedDate['poosts_id'] = $this->poosts_id;

        ModelsComentario::create($validatedDate);
        $this->limpar();
        session()->flash('status', 'Comentário adicionado!');
    }
    
    public function render()
    {
        $this->comentario = ModelsComentario::with('users')
        ->where('poosts_id', $this->poosts_id)
        ->orderBy('created_at', 'desc')->get();
        $this->ultimo = Poost::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.comentario')->layout('layouts.appp', compact('sr'));
    }
}
