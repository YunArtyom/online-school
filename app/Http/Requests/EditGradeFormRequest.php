<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class EditGradeFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'description' => 'required|string',
            'price_usd' => 'required|numeric',
            'price_rub' => 'required|numeric',
            'price_won' => 'required|numeric',
            'month_price_usd' => 'required|numeric',
            'month_price_rub' => 'required|numeric',
            'month_price_won' => 'required|numeric',
            'start_at' => 'required|date',

        ];
    }

    public function messages(): array
    {

    }
}
