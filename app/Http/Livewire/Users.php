<?php

namespace App\Http\Livewire;

use App\Models\Models\Role;
use App\Models\Servico;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users_id, $role_id;
    public $updateData = false;

    private function resetInput()
    {
        $this->users_id = '';
        $this->role_id = '';
    }

    public function edit($id)
    {
        $this->updateData = true;
        $users = User::with('roles')->findOrFail($id);
        $this->users_id = $users->id;
        $this->role_id = $users->role_id;
    }
    public function update()
    {
        $validateDate = $this->validate([
            'users_id' => 'required',
            'role_id' => 'required',
        ]);

        User::find($this->users_id)->update($validateDate);
        $this->resetInput();
        $this->updateData = false;
        session()->flash('status', 'Utilizador actualizado com sucesso!'); 
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        $this->resetInput();
        session()->flash('status', 'Utilizador actualizado com sucesso!'); 
    }

    public function render()
    {
        $this->users = User::with('roles')->orderBy('created_at', 'desc')->get();
        $this->role = Role::orderBy('created_at', 'desc')->get();
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.users')->layout('layouts.appp', compact('sr'));
    }
}
