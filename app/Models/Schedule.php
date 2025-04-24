<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Schedule extends Model
{
    protected $fillable = ['calendar_day_id', 'topic_id', 'grade_id', 'subject_id'];

    public function topic(): HasOne
    {
        //has one - только одно присвоение темы ко дню/классу. Если больше - hasMany
        return $this->hasOne(Topic::class,  'id', 'topic_id');
    }
}
