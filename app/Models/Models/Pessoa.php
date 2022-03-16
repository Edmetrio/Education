<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Pessoa extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'pessoa';
    protected $fillable = ['sexo_id','telefone','nome','nascimento','passaporte','email'];

    public function sexos()
    {
        return $this->hasOne(Sexo::class, 'id', 'sexo_id');
    }
    public function academic
}

