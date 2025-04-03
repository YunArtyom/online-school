<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\PersonalAccessToken;


class RegisterFormRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        if (empty($this->type)) {
            $this->merge(['type' => 'student']);
        }

        if ($this->type === User::ADMIN_TYPE or $this->type === User::TEACHER_TYPE) {
            $this->merge(['status' => 'active']);
        } else {
            $this->merge(['status' => 'inactive']);
        }
    }

    public function authorize(): bool
    {
        if ($this->input('type') !== User::STUDENT_TYPE) {
            if (auth()->check()) {
                return auth()->user()->type === User::DIRECTOR_TYPE;
            } else {
                $accessToken = PersonalAccessToken::findToken($this->bearerToken());
                if (is_null($accessToken)) {
                    return false;
                }
                return $accessToken->tokenable->type === User::DIRECTOR_TYPE;
            }
        }

        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|numeric',
            'country' => ['required','string', Rule::in(array_keys(User::COUNTRIES))],
            'password' => 'required|string|min:8',
            'type' => ['required', Rule::in([User::STUDENT_TYPE, User::TEACHER_TYPE, User::ADMIN_TYPE])],
            'status' => ['required', Rule::in([User::ACTIVE_STATUS, User::INACTIVE_STATUS])],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'  => 'Поле Имя обязательно для заполнения.',
            'name.string'    => 'Поле Имя должно быть строкой.',
            'name.max'       => 'Поле Имя не должно превышать 255 символов.',

            'email.required' => 'Поле Email обязательно для заполнения.',
            'email.email'    => 'Поле Email должно быть корректным адресом электронной почты.',
            'email.unique'   => 'Такой email уже используется.',

            'age.required'   => 'Поле Возраст обязательно для заполнения.',
            'age.numeric'    => 'Поле Возраст должно быть числом.',

            'country.required' => 'Поле Страна обязательно для заполнения.',
            'country.string'   => 'Поле Страна должно быть строкой.',
            'country.in'       => 'Выбранное значение для "Страны" некорректно.',

            'password.required' => 'Поле Пароль обязательно для заполнения.',
            'password.string'   => 'Поле Пароль должно быть строкой.',
            'password.min'      => 'Поле Пароль должно содержать минимум 8 символов.',
        ];
    }
}
