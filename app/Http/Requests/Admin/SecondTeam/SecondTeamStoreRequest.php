<?php

namespace App\Http\Requests\Admin\SecondTeam;

use Illuminate\Foundation\Http\FormRequest;

class SecondTeamStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth("admin")->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'second_name' => 'required|max:30',

        ];
    }
}
