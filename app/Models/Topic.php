<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Topic extends Model
{
    public const ACTIVE_STATUS = 'active';
    public const INACTIVE_STATUS = 'inactive';

    public const EVALUATION_SCORE_TYPE = 'Балл';
    public const EVALUATION_READ_TYPE = 'Прочитано';
    public const EVALUATION_PASS_OR_FAIL_TYPE = 'Зачёт/незачёт';
    public const EVALUATION_PASS_PERCENTAGE_TYPE = 'Процент';
    public const EVALUATION_TYPES = [self::EVALUATION_SCORE_TYPE, self::EVALUATION_READ_TYPE, self::EVALUATION_PASS_OR_FAIL_TYPE, self::EVALUATION_PASS_PERCENTAGE_TYPE];

    public const STATUSES = [self::ACTIVE_STATUS, self::INACTIVE_STATUS];

    protected $fillable = ['grade_id', 'subject_id', 'status', 'name', 'theory', 'practice', 'additional', 'homework',
        'deadline_offset', 'evaluation_type', 'price_usd', 'price_rub', 'price_won', 'evaluation_min', 'evaluation_max'
    ];

    //В оценку ДЗ нужно сохранять тип оценки, вдруг тип оценки для темы будет изменен в процессе
}
