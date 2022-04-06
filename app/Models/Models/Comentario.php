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

    public function curtirs()
    {
        return $this->belongsToMany(Curtir::class, 'itemcurtir', 'comentario_id', 'curtir_id');
    }

    public function itemcurtirs()
    {
        return $this->hasMany(Itemcurtir::class, 'comentario_id')
                        ->where(function ($query){
                            if(auth()->check()){
                                $query->where('users_id', auth()->user()->id);
                            }
                        });
    }
}
