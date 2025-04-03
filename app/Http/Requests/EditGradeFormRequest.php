<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class EditGradeFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'description' => 'sometimes|string',
            'price_usd' => 'sometimes|numeric',
            'price_rub' => 'sometimes|numeric',
            'price_won' => 'sometimes|numeric',
            'month_price_usd' => 'sometimes|numeric',
            'month_price_rub' => 'sometimes|numeric',
            'month_price_won' => 'sometimes|numeric',
            'start_at' => 'sometimes|date',
        ];
    }

    public function messages(): array
    {
        return [
            'description.string' => 'Описание должно быть строкой.',

            'price_usd.numeric' => 'Годовая цена в долларах должна быть числом.',
            'price_rub.numeric' => 'Годовая цена в рублях должна быть числом.',
            'price_won.numeric' => 'Годовая цена в вонах должна быть числом.',

            'month_price_usd.numeric' => 'Месячная цена в долларах должна быть числом.',
            'month_price_rub.numeric' => 'Месячная цена в рублях должна быть числом.',
            'month_price_won.numeric' => 'Месячная цена в вонах должна быть числом.',

            'start_at.date' => 'Дата начала должна быть корректной датой.',
        ];
    }
}
