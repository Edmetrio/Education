<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Moeda extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'moeda';
    protected $fillable = ['nome','estado'];

    public function itemcursos()
    {
        return $this->hasMany(Itemcurso::class, 'moeda_id');
    }
}
