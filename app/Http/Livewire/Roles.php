<?php

namespace App\Http\Livewire;

use App\Models\Models\Role;
use App\Models\Servico;
use Livewire\Component;

class Roles extends Component
{
    public $nome, $edit_nome, $edit_id;
    public $createData  = true, $updateData = false, $showData = true;

    private function resetInput()
    {
        $this->nome = '';
    }

    public function store()
    {
        $validateDate = $this->validate([
            'nome' => 'required',
        ]);

        Role::create($validateDate);
        $this->message = 'Role criado com sucesso!';
        $this->text = 'Por favor, verifique na tabela';
        $this->alertSuccess();
        $this->resetInput();
        session()->flash('status', 'Role criado com sucesso!'); 
    }

    public function edit($id)
    {
        $this->updateData = true;
        $this->createData = false;
        $role = Role::findOrFail($id);
        $this->edit_nome = $role->nome;
        $this->edit_id = $id;
    }

    public function update()
    {
        $validateDate = $this->validate([
            'edit_nome' => 'required',
        ]);

        $validateDate['nome'] = $this->edit_nome;
        Role::findOrfail($this->edit_id)->update($validateDate);
        $this->resetInput();
        $this->updateData = false;
        $this->createData = true;
        session()->flash('status', 'Role actualizado com sucesso!'); 
    }

    public function delete($id)
    {
        Role::findOrFail($id)->delete();
        $this->resetInput();
        session()->flash('status', 'Role apagado com sucesso!'); 
    }

    public function render()
    {
        $this->roles = Role::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.roles')->layout('layouts.appp', compact('sr'));
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => $this->message, 
                'text' => $this->text
            ]);
    }
}
