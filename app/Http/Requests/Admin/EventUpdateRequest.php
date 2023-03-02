<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'datetime' => 'required|date',
            'place' => 'required|string|max:150',
            'type' => 'string|max:50',
            'description' => 'string|nullable|max:50',
            'locker_room' => 'string|max:100',
            'teams' => "nullable|array|min:2|max:2",
            'underline' => 'nullable'
        ];
    }
}
