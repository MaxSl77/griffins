<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TimetableFormRequest extends FormRequest
{
    public function authorize()
    {
        return auth("admin")->check();
    }


    public function rules()
    {
        return [
            'month' => 'required',
            'date' => 'required',
            'place' => 'max:50',
            'championship' => 'max:50',
            'type' => 'max:50',
            'start_at' => 'max:50',
            'teams' => 'max:50',
            'locker_room' => 'max:50',
            'place_2' => 'max:50',
            'championship_2' => 'max:50',
            'type_2' => 'max:50',
            'start_at_2' => 'max:50',
            'teams_2' => 'max:50',
            'locker_room_2' => 'max:50',
        ];
    }
}
