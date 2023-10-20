<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Itemcandidato extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'itemcandidato';
    protected $fillable = ['candidato_id','user_id','nome','estado'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function candidatos()
    {
        return $this->belongsTo(Candidato::class, 'candidato_id', 'id');
    }
}
