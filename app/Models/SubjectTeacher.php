<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class SubjectTeacher extends Model
{
    protected $fillable = ['subject_id', 'teacher_id'];

    public $timestamps = false;

    public function teacher(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }
}
