<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
    public const ACTIVE_STATUS = 'active';
    public const INACTIVE_STATUS = 'inactive';

    public const STATUSES = [self::ACTIVE_STATUS, self::INACTIVE_STATUS];

    protected $fillable = ['name', 'grade_id', 'description', 'status', 'price_usd', 'price_rub', 'price_won'];
}
