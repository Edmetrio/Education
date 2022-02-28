<?php

namespace App\Models\Models;

use App\Models\Servico;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Pacote extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'pacote';
    protected $fillable = ['servico_id','nome','valor','estado'];

    public function servicos()
    {
        return $this->hasOne(Servico::class, 'id', 'servico_id');
    }
}
