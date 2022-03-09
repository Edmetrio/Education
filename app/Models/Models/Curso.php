<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Curso extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'curso';
    protected $fillable = ['nome','categoria_id','estado'];

    public function categorias()
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }
    
    public function itemcursos()
    {
        return $this->hasMany(Itemcurso::class, 'curso_id');
    }
}
