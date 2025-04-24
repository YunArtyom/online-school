<?php

namespace App\Http\Resources\Topics;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class CalendarTopicsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'date' => $this->date,
            'day_of_week' => $this->day_of_week,
            'is_weekend' => $this->is_weekend,
            'is_holiday' => $this->is_holiday,
            'topics' => $this->schedules->pluck('topic')->sortBy('created_at')->pluck('name')->toArray(),
        ];
    }
}
