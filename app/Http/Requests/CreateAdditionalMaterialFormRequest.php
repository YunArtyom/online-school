<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CreateAdditionalMaterialFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'link' => 'required|url',
            'price_usd' => 'required|integer',
            'price_rub' => 'required|integer',
            'price_won' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле Название обязательно для заполнения.',
            'name.string' => 'Поле Название должно быть строкой.',
            'name.max' => 'Поле Название не должно превышать 100 символов.',

            'description.required' => 'Поле Описание обязательно для заполнения.',
            'description.string' => 'Поле Описание должно быть строкой.',

            'link.required' => 'Поле Ссылка обязательно для заполнения.',
            'link.url' => 'Поле Ссылка должно быть корректным URL.',

            'price_usd.required' => 'Поле Цена (USD) обязательно для заполнения.',
            'price_usd.integer' => 'Поле Цена (USD) должно быть числом.',
            'price_rub.required' => 'Поле Цена (RUB) обязательно для заполнения.',
            'price_rub.integer' => 'Поле Цена (RUB) должно быть числом.',
            'price_won.required' => 'Поле Цена (WON) обязательно для заполнения.',
            'price_won.integer' => 'Поле Цена (WON) должно быть числом.',
        ];
    }
}
