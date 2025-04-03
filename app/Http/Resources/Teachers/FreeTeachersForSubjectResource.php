<?php

namespace App\Http\Resources\Teachers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class FreeTeachersForSubjectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'teacher_id' => $this->id,
            'teacher_name' => $this->name,
        ];
    }
}
