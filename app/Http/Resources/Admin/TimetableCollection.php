<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TimetableCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return TimetableResource::collection($this->collection);
    }
}
