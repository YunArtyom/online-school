<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    public const TYPES = [self::DIRECTOR_TYPE, self::ADMIN_TYPE, self::TEACHER_TYPE, self::STUDENT_TYPE];
    public const DIRECTOR_TYPE = 'director';
    public const ADMIN_TYPE = 'admin';
    public const TEACHER_TYPE = 'teacher';
    public const STUDENT_TYPE = 'student';

    public const STATUSES = [self::ACTIVE_STATUS, self::INACTIVE_STATUS, self::SICK_STATUS, self::VACATION_STATUS];
    public const ACTIVE_STATUS = 'active';
    public const INACTIVE_STATUS = 'inactive';
    public const SICK_STATUS = 'sick';
    public const VACATION_STATUS = 'vacation';

    public const COUNTRIES = ['Russia' => 'Россия', 'South Korea' => 'Южная Корея', 'USA' => 'США',
        'Indonesia' => 'Индонезия', 'Thailand' => 'Тайланд', 'Kazakhstan' => 'Казахстан',
        'Uzbekistan' => 'Узбекистан', 'Kyrgyzstan' => 'Кыргызстан', 'Another' => 'Нет в списке'];

    protected $fillable = [
        'type', 'name', 'email', 'age', 'country', 'additional', 'status', 'absent_form',
        'absent_to', 'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function grade(): HasOne
    {
        return $this->hasOne(Grade::class);
    }
}
