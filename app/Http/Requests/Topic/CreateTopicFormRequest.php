<?php

namespace App\Http\Requests\Topic;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CreateTopicFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100',
                Rule::unique('topics')
                    ->where(fn ($query) => $query
                        ->where('grade_id', $this->input('grade_id'))
                        ->where('subject_id', $this->input('subject_id'))
                    ),
            ],
            'subject_id' => ['required', 'integer',
                Rule::exists('subjects', 'id')
                    ->where(fn ($query) => $query->where('grade_id', $this->input('grade_id'))),
            ],
            'grade_id' => ['required', 'integer', 'exists:grades,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле Название обязательно для заполнения.',
            'name.string' => 'Поле Название должно быть строкой.',
            'name.max' => 'Поле Название не должно превышать 100 символов.',
            'name.unique' => 'Тема для данного класса и предмета с таким именем уже существует.',
        ];
    }
}
