<?php

namespace App\Http\Livewire;

use App\Models\Models\Permissao;
use App\Models\Models\Role;
use App\Models\Models\Rota;
use App\Models\Servico;
use Livewire\Component;

class Permissaos extends Component
{
    public $role_id, $rota_id, $pid;
    public $updateData = false;
    
    private function resetInput()
    {
        $this->role_id = ' ';
        $this->rota_id = ' ';
        $this->pid = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'role_id' => 'required',
            'rota_id' => 'required'
        ]);

        Permissao::create($validateDate);
        $this->resetInput();
        session()->flash('status', 'Permissão criada com sucesso!'); 
    }

    public function edit($id)
    {
        $this->updateData = true;
        $permissao = Permissao::findOrFail($id);
        $this->role_id = $permissao->role_id;
        $this->rota_id = $permissao->rota_id;
        $this->pid = $permissao->id;
        }

    public function update()
    {
        $validateDate = $this->validate([
            'role_id' => 'required',
            'rota_id' => 'required'
        ]);

        Permissao::findOrFail($this->pid)->update($validateDate);
        $this->resetInput();
        $this->updateData = false;
        session()->flash('status', 'Permissão alterada com sucesso!');
    }

    public function delete($id)
    {
        Permissao::findOrFail($id)->delete();
        $this->resetInput();
        session()->flash('status', 'Permissão criada com sucesso!');
    }

    public function render()
    {
        $this->permissao = Permissao::with('roles','rotas')->orderBy('created_at', 'desc')->get();
        $this->role = Role::orderBy('created_at', 'desc')->get();
        $this->rota = Rota::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.permissaos')->layout('layouts.appp', compact('sr'));
    }
}
