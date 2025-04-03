<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class StudentHomework extends Model
{
    public const STATUSES = ['Не проверено', 'Прочитано', 'Проверено'];
}
