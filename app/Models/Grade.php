<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Grade extends Model
{
    public const ACTIVE_STATUS = 'active';
    public const INACTIVE_STATUS = 'inactive';

    public const STATUSES = [self::ACTIVE_STATUS, self::INACTIVE_STATUS];

    public $timestamps = false;

    protected $fillable = ['grade', 'description', 'status', 'start_at', 'price_usd', 'price_rub',
        'price_won', 'month_price_usd', 'month_price_rub', 'month_price_won'];


    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
}
