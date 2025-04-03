<?php

namespace App\Http\Resources\Teachers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class TeachersBySubjectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'teacher_id' => $this->teacher->id,
            'teacher_name' => $this->teacher->name,
        ];
    }
}
