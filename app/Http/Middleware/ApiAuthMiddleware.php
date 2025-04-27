<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Facades\ApiCallFacade;

class ApiAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $token = Cookie::get('api_sanctum_token');

        if (!$token) {
            return redirect()->route('login')->withErrors(['auth' => 'Не авторизован']);
        }

        // Проверяем пользователя через API
        $user = ApiCallFacade::get('/auth/me');

        if (!isset($user['id'])) {
            return redirect()->route('login')->withErrors(['auth' => 'Не авторизован']);
        }

        $request->attributes->set('user', $user);
        return $next($request);
    }
}
