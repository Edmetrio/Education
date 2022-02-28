<?php

namespace App\Models;

use App\Models\Models\Pacote;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Servico extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'servico';
    protected $fillable = ['nome','icon','descricao','texto','estado'];

    public function pacotes()
    {
        return $this->hasMany(Pacote::class, 'servico_id');
    }
}
