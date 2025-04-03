<?php

namespace App\Models;

use App\Models\Traits\TextMasks;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static Builder|static visible()
 */
class Notification extends Model
{
    use TextMasks;

    public const TYPES = [self::REMINDER_TYPE, self::WARNING_TYPE, self::PAYMENT_TYPE, self::HOMEWORK_REVIEWED_TYPE, self::DIRECTOR_MESSAGE_TYPE];
    public const REMINDER_TYPE = 'reminder';
    public const WARNING_TYPE = 'warning';
    public const PAYMENT_TYPE = 'payment';
    public const HOMEWORK_REVIEWED_TYPE = 'homework_reviewed';
    public const DIRECTOR_MESSAGE_TYPE = 'director_message';

    public const TARGETS = [self::ALL_TARGET, self::TEACHERS_TARGET, self::STUDENTS_TARGET, self::TEACHERS_CLASS_TARGET, self::STUDENTS_CLASS_TARGET, self::PERSONAL_TARGET];
    public const ALL_TARGET = 'all';
    public const TEACHERS_TARGET = 'teachers';
    public const STUDENTS_TARGET = 'students';
    public const TEACHERS_CLASS_TARGET = 'teachers_class';
    public const STUDENTS_CLASS_TARGET = 'students_class';
    public const PERSONAL_TARGET = 'personal';


    protected $fillable = ['user_id', 'type', 'text', 'show_from', 'show_until', 'hidden_until', 'link', 'link_text',
        'score', 'target', 'grade_id'];

    protected $casts = [
        'show_from' => 'datetime',
        'show_until' => 'datetime',
        'hidden_until' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function scopeVisible($query)
    {
        $now = now();

        return $query->where(function ($q) use ($now) {
            $q->where(function ($q2) use ($now) {
                $q2->whereNull('show_from')
                    ->orWhere('show_from', '<=', $now);
            })
            ->where(function ($q2) use ($now) {
                $q2->whereNull('show_until')
                    ->orWhere('show_until', '>=', $now);
            })
            ->where(function ($q2) use ($now) {
                $q2->whereNull('hidden_until')
                    ->orWhere('hidden_until', '<=', $now);
            });
        });
    }
}
