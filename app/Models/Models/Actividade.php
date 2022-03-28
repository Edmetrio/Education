<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Actividade extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'actividade';
    protected $fillable = ['users_id','situacao_id','pessoa_id','tipo_id','nome','descricao','anexo'];

    public function tipos()
    {
        return $this->belongsTo(Tipo::class, 'tipo_id', 'id');
    }

    public function situacaos()
    {
        return $this->belongsTo(Situacao::class, 'situacao_id', 'id');
    }

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id', 'id');
    }
}
