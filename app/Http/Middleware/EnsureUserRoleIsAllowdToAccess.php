<?php

namespace App\Http\Middleware;

use App\Models\Models\Permissao;
use App\Models\Models\Role;
use App\Models\Models\Rota;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class EnsureUserRoleIsAllowdToAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /* echo 'middleware. <br/>'; */

        $user = Auth::user()->role_id;
        $route = Route::currentRouteName();
        $rota = Rota::where('nome', $route)->first();
        /* echo $user.'<br/>';
        echo $route.'<br/>'; */

        try {
            if (Permissao::isRoleHasRightToAccess($user, $rota->id)
                || in_array($route, $this->defaultUserAccessRole()[$user])) {
                return $next($request);
            } else {
                abort(403, 'Não Autorizado!');
            }
        } catch (\Throwable $th) {
            $route = Route::currentRouteName();
            echo $route.'<br/>';
            abort(403, 'Você não esta autorizador a aceder essa página!');
        }

        
    }

    private function defaultUserAccessRole()
    {
        $admin = Role::with('rotas')->where('nome', 'admin')->first();
        return [
            $admin->id => [
                'users',
                'permissaos'
            ]
        ];
    }
}
