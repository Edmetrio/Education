<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Entidade extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'entidade';
    protected $fillable = ['nome','estado'];

    public function Inscricaos()
    {
        return $this->hasMany(Inscricao::class, 'entidade_id');
    }

    public function itemcursos()
    {
        return $this->hasMany(Itemcurso::class, 'entidade_id');
    }
}
