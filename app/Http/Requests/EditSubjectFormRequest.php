<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class EditSubjectFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:200',
            'description' => 'sometimes|string',
            'price_usd' => 'sometimes|numeric',
            'price_rub' => 'sometimes|numeric',
            'price_won' => 'sometimes|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'Поле Название должно быть строкой.',
            'name.max' => 'Поле Название не должно превышать 200 символов.',

            'description.string' => 'Поле Описание должно быть строкой.',

            'price_usd.numeric' => 'Поле Цена в долларах должно быть числом.',

            'price_rub.numeric' => 'Поле Цена в рублях должно быть числом.',

            'price_won.numeric' => 'Поле Цена в вонах должно быть числом.',
        ];
    }
}
