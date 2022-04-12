<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Permissao extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'permissao';
    protected $fillable = ['role_id','rota_id','estado'];

    public function roles()
    {
        return $this->hasMany(Role::class, 'id', 'role_id');
    }

    public function rotas()
    {
        return $this->hasMany(Rota::class, 'id', 'rota_id');
    }

    public static function isRoleHasRightToAccess($userRole, $routeName)
    {
        try {
            $model = static::where('role', $userRole)
                            ->where('route_name', $routeName)
                            ->first();
            return $model ? true : false;                
        } catch (\Throwable $th) {
            return false;
        }
    }
}
