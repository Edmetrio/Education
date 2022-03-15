<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Servico;
use Livewire\Component;

class Wizard extends Component
{

    public $currentStep = 1;
    public $name, $amount, $description, $status = 1, $stock;
    public $successMessage = '';

    public function render()
    {
        $sr = Servico::orderBy('created_at', 'desc')->get();
        return view('livewire.wizard')->layout('layouts.app', compact('sr'));
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required|unique:products',
            'amount' => 'required|numeric',
            'description' => 'required',
        ]);
 
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);
  
        $this->currentStep = 3;
    }

    public function submitForm()
    {
        Product::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'description' => $this->description,
            'stock' => $this->stock,
            'status' => $this->status,
        ]);
  
        $this->successMessage = 'Product Created Successfully.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;    
    }

    public function clearForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->stock = '';
        $this->status = 1;
    }
}
