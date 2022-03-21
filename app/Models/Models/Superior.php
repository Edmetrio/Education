<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Superior extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'superior';
    protected $fillable = ['pessoa_id','grau_id','pacote_id','moeda_id','intake_id','curso','orcamento'];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id', 'id');
    }

    public function graus()
    {
        return $this->belongsTo(Grau::class, 'grau_id', 'id');
    }

    public function pacotes()
    {
        return $this->belongsTo(Pacote::class, 'pacote_id', 'id');
    }

    public function moedas()
    {
        return $this->belongsTo(Moeda::class, 'moeda_id', 'id');
    }

    public function intakes()
    {
        return $this->belongsTo(Intake::class, 'intake_id', 'id');
    }

    public function idiomas()
    {
        return $this->belongsToMany(Idioma::class, 'itemidioma');
    }

    public function pais()
    {
        return $this->belongsToMany(Pais::class, 'itempais');
    }
}
