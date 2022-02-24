<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Depoimentos extends Component
{
    use WithFileUploads;
    public $nome, $texto, $icon, $descricao, $link;
    public $edit_nome, $edit_texto, $edit_descricao, $edit_id, $edit_link, $old_icon, $new_icon;

    public $depoimento;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    private function resetInput()
    {
        $this->nome = '';
        $this->descricao = '';
        $this->texto = '';
        $this->icon = '';
        $this->link = '';
    }
    public function render()
    {
        return view('livewire.depoimentos');
    }
}
