<?php

namespace App\Http\Resources\Subjects;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class SubjectsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'priceUSD' => $this->price_usd,
            'priceRUB' => $this->price_rub,
            'priceWON' => $this->price_won,
            'status' => $this->status
        ];
    }
}
