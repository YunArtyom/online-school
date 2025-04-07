<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Topic extends Model
{
    public const ACTIVE_STATUS = 'active';
    public const INACTIVE_STATUS = 'inactive';

    public const STATUSES = [self::ACTIVE_STATUS, self::INACTIVE_STATUS];

    protected $fillable = ['subject_id', 'status', 'name', 'description', 'theory', 'practice', 'additional',
        'homework', 'deadline_offset',
    ];

    //additional_material_id
}
