<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if (Auth::guard($role)->check()) {
                $request->attributes->set('role', $role);
                return $next($request);
            }
        }

        abort(403); // atau redirect()->route('login')
    }
}
