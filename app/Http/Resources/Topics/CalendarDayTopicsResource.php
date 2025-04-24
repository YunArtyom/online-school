<?php

namespace App\Http\Resources\Topics;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class CalendarDayTopicsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status,
        ];
    }
}
