<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class IsDirector
{
    public function handle(Request $request, Closure $next): Response
    {
        if (request()->attributes->get('user')['type'] === User::DIRECTOR_TYPE) {
            return $next($request);
        }

        abort(403);
    }
}
