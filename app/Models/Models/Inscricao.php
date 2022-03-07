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
    protected $fillable = ['user_id','pais_id','entidade_id','universidade','abertura','fecho','link','anexo', 'estado'];

    public function entidades()
    {
        return $this->hasOne(Entidade::class, 'id', 'entidade_id');
    }

    public function pais()
    {
        return $this->hasOne(Pais::class, 'id', 'pais_id');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
