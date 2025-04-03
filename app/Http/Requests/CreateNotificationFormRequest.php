<?php

namespace App\Http\Requests;

use App\Models\Notification;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CreateNotificationFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'text' => 'required|string',
            'show_from' => 'nullable|date',
            'show_until' => 'nullable|date',
            'target' => ['required', Rule::in(Notification::TARGETS)],
            'grade_id' => 'nullable|numeric|exists:grades,id|required_if:target,' . Notification::TEACHERS_CLASS_TARGET . ',' . Notification::STUDENTS_CLASS_TARGET,
        ];
    }

    public function messages(): array
    {
        return [
            'text.required' => 'Поле Текст обязательно для заполнения.',
            'text.string' => 'Поле Текст должно быть строкой.',

            'show_from.date' => 'Поле Показывать С должно быть корректной датой.',
            'show_until.date' => 'Поле Показывать ДО должно быть корректной датой.',

            'target.required' => 'Поле Для Кого обязательно для заполнения.',
            'target.in' => 'Выбранное значение в поле Для Кого недопустимо.',
        ];
    }
}
