<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Calendar extends Model
{
    protected $table = 'calendar';

    protected $fillable = [
        'date', 'day_of_week', 'is_weekend', 'is_holiday', 'note'
    ];
}
