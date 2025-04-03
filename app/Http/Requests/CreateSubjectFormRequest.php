<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CreateSubjectFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:200',
            'grade_id' => 'required|integer|exists:grades,id',
            'description' => 'required|string',
            'price_usd' => 'required|numeric',
            'price_rub' => 'required|numeric',
            'price_won' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле Название обязательно для заполнения.',
            'name.string' => 'Поле Название должно быть строкой.',
            'name.max' => 'Поле Название не должно превышать 200 символов.',

            'description.required' => 'Поле Описание обязательно для заполнения.',
            'description.string' => 'Поле Описание должно быть строкой.',

            'price_usd.required' => 'Поле Цена в долларах обязательно для заполнения.',
            'price_usd.numeric' => 'Поле Цена в долларах должно быть числом.',

            'price_rub.required' => 'Поле Цена в рублях обязательно для заполнения.',
            'price_rub.numeric' => 'Поле Цена в рублях должно быть числом.',

            'price_won.required' => 'Поле Цена в вонах обязательно для заполнения.',
            'price_won.numeric' => 'Поле Цена в вонах должно быть числом.',
        ];
    }
}
