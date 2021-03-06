<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Inscricao extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'inscricao';
    protected $fillable = ['user_id', 'pais_id', 'universidade', 'abertura', 'fecho', 'link', 'anexo', 'estado'];

    public function pais()
    {
        return $this->hasOne(Pais::class, 'id', 'pais_id');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    //Nova Relação
    public function itemcursos()
    {
        return $this->hasMany(Itemcurso::class, 'inscricao_id');
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'itemcurso');
    }

    public function intakes()
    {
        return $this->belongsToMany(Intake::class, 'itemintake');
    }

    public function graus()
    {
        return $this->belongsToMany(Grau::class, 'itemcurso');
    }

    public function entidades()
    {
        return $this->belongsToMany(Entidade::class, 'itemcurso');
    }
}
