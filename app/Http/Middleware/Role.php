<?php

namespace App\Http\Middleware;

use Closure;

class Role
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = auth()->user();

        if (! AccessHandler::check($user->role, $role)) {
            abort(404);
        }

        return $next($request);
    }
}
