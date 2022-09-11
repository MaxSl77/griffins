<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TeamCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return TeamResource::collection($this->collection);
    }
}
