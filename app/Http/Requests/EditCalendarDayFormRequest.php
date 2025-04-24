<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class EditCalendarDayFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'subject_id' => ['required', 'integer',
                Rule::exists('subjects', 'id')
                    ->where(fn ($query) => $query->where('grade_id', $this->input('grade_id'))),
            ],
            'grade_id' => ['required', 'integer', 'exists:grades,id'],
            'is_weekend' => ['sometimes', 'boolean'],
            'is_holiday' => ['sometimes', 'boolean'],
        ];
    }
}
