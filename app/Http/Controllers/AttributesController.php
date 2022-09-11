<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributesController extends Controller
{
    public function index() {

        $attributes = Attribute::all();

        return view('attributes.index', [
            'attributes' => $attributes
        ]);
    }
}
