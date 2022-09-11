<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class TeamResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'logo' => Storage::url($this->logo),
        ];
    }
}
