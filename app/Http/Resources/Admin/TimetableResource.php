<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class TimetableResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'start_at' => $this->start_at,
            'type' => $this->type,
            'place' => $this->place,
            'locker_room' => $this->locker_room,
        ];
    }
}
