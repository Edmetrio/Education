<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;


class Candidato extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'candidato';
    protected $fillable = ['estado_id','user_id','nome','descricao','estado'];

    public function estados()
    {
        return $this->belongsTo(Estado::class, 'estado_id', 'id');
    }
    

    public function itemcandidatos()
    {
        return $this->hasMany(Itemcandidato::class, 'candidato_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
