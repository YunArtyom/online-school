<?php

namespace App\Http\Controllers\Web;

use App\Facades\ApiCallFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class AuthController
{
    public function login(Request $request)
    {
        $response = ApiCallFacade::post('/auth/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if (!isset($response['access_token'])) {
            return back()->withErrors([
                'email' => 'Неверный логин или пароль',
            ]);
        }

        Cookie::queue('user', json_encode($response['user']), 60 * 24 * 365 * 5);
        Cookie::queue('api_sanctum_token', $response['access_token'], 60 * 24 * 365 * 5);

        return redirect(route('main'));
    }
}
