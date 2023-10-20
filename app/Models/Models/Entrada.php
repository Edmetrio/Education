<?php

namespace App\Models\Models;

use App\Models\User;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'entrada';
    protected $fillable = ['tipoentrada_id','user_id','nome','descricao','valor','estado'];

    public function tipoentradas()
    {
        return $this->belongsTo(Tipoentrada::class, 'tipoentrada_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
