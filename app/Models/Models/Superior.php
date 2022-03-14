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
    protected $fillable = ['pessoa_id','grau_id','pacote_id','moeda_id','curso','orcamento'];
}
