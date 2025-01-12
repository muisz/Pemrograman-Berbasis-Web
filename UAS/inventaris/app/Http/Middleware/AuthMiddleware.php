<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Utils\LocalSession;
use App\Models\User;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user_id = LocalSession::get_user();
        if ($user_id)
        {
            $user = User::find($user_id);
            if ($user && str_contains($role, $user->role))
            {
                $request->setUserResolver(function () use ($user) {
                    return $user;
                });
                return $next($request);
            }
        }
        return redirect()->route('login');
    }
}
