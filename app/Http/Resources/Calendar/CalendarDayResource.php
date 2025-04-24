<?php

namespace App\Http\Resources\Calendar;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;


class CalendarDayResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        App::setLocale('ru');
        $carbon = Carbon::parse($this->date);

        return [
            'id' => $this->id,
            'date' => $carbon->translatedFormat('l j F Y'),
            'is_weekend' => (int) $this->is_weekend,
            'is_holiday' => (int) $this->is_holiday,
            'topics' => $this->schedules->pluck('topic')->sortBy('created_at')->map(function ($topic) {
                return [
                    'id' => $topic->id,
                    'name' => $topic->name,
                ];
            }),
        ];
    }
}
