<?php

namespace App\Http\Livewire;

use App\Models\Models\Poost;
use App\Models\Servico;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Contas extends Component
{
    use WithFileUploads;
    public $edit_id, $nome, $old_icon, $new_icon;
    public $password, $confpassword;

    public $showData = true;
    public $updateData = false;
    public $passwordData = false;
    public $politicaData = false;

    private function resetInput()
    {
        $this->nome = '';
        $this->old_icon = '';
        $this->new_icon = '';
    }

    public function resetPassword()
    {
        $this->password = null;
        $this->confpassword = null;
    }

    public function index()
    {
        $this->showData = true;
        $this->updateData = false;
        $this->passwordData = false;
        $this->politicaData = false;
    }

    public function politica()
    {
        $this->showData = false;
        $this->updateData = false;
        $this->passwordData = false;
        $this->politicaData = true;
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->updateData = true;
        $this->passwordData = false;
        $this->politicaData = false;
        $user = User::findorFail($id);
        $this->edit_id = $id;
        $this->nome = $user->name;
        $this->old_icon = $user->icon;
    }

    public function update($edit_id)
    {
        $validateDate = $this->validate([
            'nome' => 'required',
        ]);
        $conta = User::findOrFail($edit_id);
        $destination = public_path('storage\\' . $conta->icon);
        $filename = "";
        if ($this->new_icon === null) {
            $filename = $this->old_icon;
        } else {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_icon->store('files', 'public');
        }
        $validateDate['name'] = $this->nome;
        $validateDate['icon'] = $filename;
        $conta->update($validateDate);
        $this->showData = true;
        $this->updateData = false;
        $this->passwordData = false;
        $this->politicaData = false;
        $this->resetInput();
        session()->flash('status', 'Conta actualizada com sucesso!');
    }

    public function editPassword()
    {
        $this->showData = false;
        $this->updateData = false;
        $this->passwordData = true;
        $this->politicaData = false;
    }

    public function updatePassword()
    {
        $validateDate = $this->validate([
            'password' => 'required|min:6|max:15',
        ]);
        if ($validateDate['password'] === $this->confpassword) {
            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($validateDate['password']),
            ]);
            $this->resetPassword();
            $this->showData = true;
            $this->updateData = false;
            $this->passwordData = false;
            $this->politicaData = false;
            session()->flash('status', 'Palavra-Passe alterada com sucesso!');
        } else {
            $this->resetPassword();
            session()->flash('status', 'Erro ao alterar Palavra-Passe!');
        }
    }
    public function render()
    {
        $this->users = User::findorFail(Auth::user()->id);
        $poost = Poost::orderBy('created_at', 'desc')->paginate(3);
        $servicos = Servico::orderBy('created_at', 'desc')->paginate(3);
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.contas', compact('poost','servicos'))->layout('layouts.appp', compact('sr'));
    }
}
