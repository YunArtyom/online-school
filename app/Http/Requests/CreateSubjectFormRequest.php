<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CreateSubjectFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'grade_id' => 'required|integer|exists:grades,id',
            'description' => 'required|string',
            'price_usd' => 'required|numeric',
            'price_rub' => 'required|numeric',
            'price_won' => 'required|numeric',
        ];
    }

    public function messages(): array
    {

    }
}
