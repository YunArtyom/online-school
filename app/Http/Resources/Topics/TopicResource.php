<?php

namespace App\Http\Resources\Topics;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class TopicResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status,
            'theory' => $this->theory,
            'practice' => $this->practice,
            'homework' => $this->homework,
            'evaluation_type' => $this->evaluation_type,
            'evaluation_min' => $this->evaluation_min,
            'evaluation_max' => $this->evaluation_max,
            'deadline_offset' => $this->deadline_offset,
            'price_usd' => $this->price_usd,
            'price_rub' => $this->price_rub,
            'price_won' => $this->price_won,
            'additional_materials' => []
        ];
    }
}
