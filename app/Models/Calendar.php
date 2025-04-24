<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Calendar extends Model
{
    protected $table = 'calendar';

    protected $fillable = [
        'date', 'day_of_week', 'is_weekend', 'is_holiday'
    ];

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'calendar_day_id');
    }
}
