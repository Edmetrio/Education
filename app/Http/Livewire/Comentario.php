<?php

namespace App\Http\Livewire;

use App\Models\Models\Comentario as ModelsComentario;
use App\Models\Models\Curtir;
use App\Models\Models\Itemcurtir;
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
        $this->curtir = Curtir::orderBy('created_at', 'desc')->get();
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

    public function curtir($id)
    {
        Itemcurtir::create(['comentario_id' => $id, 
                            'users_id' => Auth::user()->id, 
                            'curtir_id' => '3ce23584-56cc-45ce-853d-98c9965053bf']);
        session()->flash('status', 'Actualizado com sucesso!');
    }

    public function descurtir($id)
    {
        Itemcurtir::where('comentario_id', $id)
        ->where('users_id', Auth::user()->id)->delete();
        session()->flash('status', 'Pagado com sucesso!');
    }
        
    
    public function render()
    {
        /* $this->item = Itemcurtir::where('poost_id', $this->poosts_id)->count();
        dd($this->item); */
        $this->comentario = ModelsComentario::with('users','curtirs','itemcurtirs')
        ->where('poosts_id', $this->poosts_id)
        ->orderBy('created_at', 'desc')->get();
        /* dd($this->comentario); */
        $this->ultimo = Poost::whereNotIn('id', [$this->poosts_id])->orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.comentario')->layout('layouts.appp', compact('sr'));
    }
}
