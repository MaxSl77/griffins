<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'datetime' => 'required|date',
            'place' => 'nullable|string|max:150',
            'type' => 'nullable|string|max:50',
            'description' => 'string|nullable|max:50',
            'locker_room' => 'nullable|string|max:100',
            'teams' => "nullable|array|min:2|max:2",
            'underline' => 'nullable',
            'second_datetime' => 'nullable|date',
            'second_place' => 'nullable|string|max:150',
            'second_type' => 'nullable|string|max:50',
            'second_description' => 'string|nullable|max:50',
            'second_locker_room' => 'nullable|string|max:100',
        ];
    }
}
