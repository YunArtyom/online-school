<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UpdateAdditionalMaterialFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:100',
            'description' => 'sometimes|string',
            'link' => 'sometimes|url',
            'price_usd' => 'sometimes|integer',
            'price_rub' => 'sometimes|integer',
            'price_won' => 'sometimes|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'Поле Название должно быть строкой.',
            'name.max' => 'Поле Название не должно превышать 100 символов.',

            'description.string' => 'Поле Описание должно быть строкой.',

            'link.url' => 'Поле Ссылка должно быть корректным URL.',

            'price_usd.integer' => 'Поле Цена (USD) должно быть числом.',
            'price_rub.integer' => 'Поле Цена (RUB) должно быть числом.',
            'price_won.integer' => 'Поле Цена (WON) должно быть числом.',
        ];
    }
}
