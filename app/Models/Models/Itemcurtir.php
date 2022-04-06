<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Itemcurtir extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'itemcurtir';
    protected $fillable = ['comentario_id','poost_id','users_id','curtir_id'];

    public function comentarios()
    {
        return $this->belongsTo(Comentario::class, 'comentario_id', 'id');
    }
}
