<?php

namespace App\Http\Middleware;

use App\Models\Models\Permissao;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class EnsureUserRoleIsAllowedToAccess
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
        echo 'The Middleware for access role runs everytime a http request is made. <br/>';
        $user = Auth::user()->role_id;
        $route = Route::currentRouteName();
        echo 'User: ' . $user . '<br/>';
        echo 'Route: ' . $route . '<br/>';

        try {
            if( Permissao::isRoleHasRightToAccess($user, $route)
                || in_array($route, $this->defaultUserAccessRole()[$user]))
        {
            return $next($request);
        } else {
            abort(403, 'Acção não Autorizada');
        }
        } catch (\Throwable $th) {
            abort(403, 'Você não está permitido a acessar essa página');
        }
    }

    private function defaultUserAccessRole()
    {
        return [
            'admin' => [
                'permissaos',
            ],
        ];
    }
}
