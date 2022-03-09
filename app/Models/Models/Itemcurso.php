<?php

namespace App\Models\Models;

use App\Models\Servico;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Itemcurso extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'itemcurso';
    protected $fillable = ['inscricao_id','servico_id','grau_id','entidade_id','moeda_id','curso_id','propina','estado'];

    public function inscricaos()
    {
        return $this->hasOne(Inscricao::class, 'id', 'inscricao_id');
    }

    public function servicos()
    {
        return $this->hasOne(Servico::class, 'id', 'servico_id');
    }

    public function cursos()
    {
        return $this->hasOne(Curso::class, 'id', 'curso_id');
    }

    public function graus()
    {
        return $this->hasOne(Grau::class, 'id', 'grau_id');
    }

    public function entidades()
    {
        return $this->hasOne(Entidade::class, 'id', 'entidade_id');
    }

    public function moedas()
    {
        return $this->hasOne(Moeda::class, 'id', 'moeda_id');
    }
}
