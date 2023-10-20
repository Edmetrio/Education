<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Cotacao extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'cotacao';
    protected $fillable = ['titulo_id','user_id','nome','valor','estado'];

    public function titulos()
    {
        return $this->belongsTo(Titulo::class, 'titulo_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function remanescentes()
    {
        return $this->hasMany(Remanescente::class, 'cotacao_id');
    }
}
