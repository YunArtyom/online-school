<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;


class LoginFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Поле Email обязательно для заполнения.',
            'email.email'    => 'Поле Email должно быть корректным адресом электронной почты.',

            'password.required' => 'Поле Пароль обязательно для заполнения.',
            'password.string'   => 'Поле Пароль должно быть строкой.',
        ];
    }
}
