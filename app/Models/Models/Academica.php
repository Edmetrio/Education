<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Academica extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'academica';
    protected $fillable = ['pessoa_id','escola','termino','pais_id','certificado','estado'];

    public function exames()
    {
        return $this->belongsToMany(Exame::class, 'itemexame');
    }

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id', 'id');
    }
}
