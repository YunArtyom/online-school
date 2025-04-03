<?php

namespace App\Http\Resources\Grades;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class GradesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'grade' => $this->grade
        ];
    }
}
