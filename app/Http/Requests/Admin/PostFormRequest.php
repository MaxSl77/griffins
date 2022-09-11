<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{

    public function authorize()
    {
        return auth("admin")->check();
    }


    public function rules()
    {
        return [
            "title" => ["required"],
            "preview" => ["required"],
            "description" => ["required"],
            "thumbnail" => ["image"],
        ];
    }
}
