<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTimetableRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'first_team_id' => 'required|exists:teams,id',
            'second_team_id' => 'required|exists:teams,id',
            'locker_room' => 'string|nullable',
            'place' => 'string|required',
            'type' => 'string|required',
            'start_at' => 'date|required',
        ];
    }
}
