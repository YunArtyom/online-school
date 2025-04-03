<?php

namespace App\Http\Resources\Grades;

use App\Http\Resources\Subjects\SubjectsResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class GradeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'grade' => $this->grade,
            'description' => $this->description,
            'startAt' => $this->start_at,
            'priceUSD' => $this->price_usd,
            'priceRUB' => $this->price_rub,
            'priceWON' => $this->price_won,
            'monthPriceUSD' => $this->month_price_usd,
            'monthPriceRUB' => $this->month_price_rub,
            'monthPriceWON' => $this->month_price_won,
            'subjects' => SubjectsResource::collection($this->subjects)
        ];
    }
}
