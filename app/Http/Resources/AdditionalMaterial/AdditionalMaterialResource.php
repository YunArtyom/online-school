<?php

namespace App\Http\Resources\AdditionalMaterial;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class AdditionalMaterialResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price_usd' => $this->price_usd,
            'price_rub' => $this->price_rub,
            'price_won' => $this->price_won,
        ];

        if (auth()->user()->type === User::DIRECTOR_TYPE) {
            $data['link'] = $this->link;
        }

        return $data;
    }
}
