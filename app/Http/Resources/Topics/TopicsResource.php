<?php

namespace App\Http\Resources\Topics;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class TopicsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'is_assigned' => $this->is_assigned,
            'status' => $this->status,
            'price_usd' => $this->price_usd,
            'price_rub' => $this->price_rub,
            'price_won' => $this->price_won,
        ];
    }
}
