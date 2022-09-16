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
            'start_at' => 'required',
            "thumbnail" => ["image"],
//            'day_of_the_week' => 'required|string',
//            'time' => ['required'],
//            'place' => ['string'],
//            'type' => ['string'],
//            'teams' => ['required'],
//            'locker_room' => ['integer'],
        ];
    }
}
