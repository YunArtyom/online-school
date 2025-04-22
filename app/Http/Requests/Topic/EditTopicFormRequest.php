<?php

namespace App\Http\Requests\Topic;

use App\Models\Topic;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class EditTopicFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'theory' => 'sometimes|string',
            'practice' => 'sometimes|string',
            'additional' => 'sometimes|string',
            'homework' => 'sometimes|string',
            'evaluation_type' => ['sometimes', Rule::in(Topic::EVALUATION_TYPES)],
            'evaluation_min' => 'sometimes|string',
            'evaluation_max' => 'sometimes|string',
            'deadline_offset' => 'sometimes|string',
            'price_usd' => 'sometimes|numeric',
            'price_rub' => 'sometimes|numeric',
            'price_won' => 'sometimes|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'theory.string' => 'Поле Теория должно быть строкой.',
            'practice.string' => 'Поле Практика должно быть строкой.',
            'additional.string' => 'Поле Дополнительно должно быть строкой.',
            'homework.string' => 'Поле Домашнее задание должно быть строкой.',

            'evaluation_type.in' => 'Выбранный тип оценки недопустим.',
            'evaluation_min.string' => 'Минимальное значение оценки должно быть строкой.',
            'evaluation_max.string' => 'Максимальное значение оценки должно быть строкой.',

            'deadline_offset.string' => 'Поле Срок сдачи (в днях) должно быть строкой.',

            'price_usd.numeric' => 'Цена в USD должна быть числом.',
            'price_rub.numeric' => 'Цена в RUB должна быть числом.',
            'price_won.numeric' => 'Цена в WON должна быть числом.',
        ];
    }
}
