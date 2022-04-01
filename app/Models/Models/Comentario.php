<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Comentario extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'comentario';
    protected $fillable = ['users_id','poosts_id','nome','curtir','estado'];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
