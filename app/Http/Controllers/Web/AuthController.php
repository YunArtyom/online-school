<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class AuthController
{
    public function login(Request $request)
    {
        $response = Http::post(url('/api/auth/login'), [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $token = $response->json('token');

            // Сохраняем токен в куку на 5 лет
            Cookie::queue('api_token', $token, 60 * 24 * 365 * 5);


            return redirect(route('main'));
        } else {
            return back()->withErrors([
                'email' => 'Неверный логин или пароль',
            ]);
        }
    }
}
