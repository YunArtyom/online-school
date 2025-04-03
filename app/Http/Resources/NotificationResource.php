<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class NotificationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $data = [
            'type' => $this->type,
            'text' => $this->text,
            'link' => $this->when(isset($this->link), $this->link),
            'linkText' => $this->when(isset($this->link_text), $this->link_text),
            'score' => $this->when(isset($this->score), $this->score),
        ];

        if (auth()->user()->type === User::DIRECTOR_TYPE) {
            if(!is_null($this->grade)) {
                $data['grade_id'] = $this->grade->id;
                $data['grade'] = $this->grade->grade;
            }

            if(!is_null($this->user)) {
                $data['user_id'] = $this->user->id;
                $data['name'] = $this->user->name;
            }

            $data['target'] = $this->target;
        }

        return $data;
    }
}
