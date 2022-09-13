<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AttributeFormRequest;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::all();

        return view("admin.attributes.index", [
            "attributes" => $attributes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.attributes.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AttributeFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeFormRequest $request)
    {
        Attribute::create($request->validated());

        return redirect(route('admin.attributes.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Attribute $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute $attribute)
    {
        return view('admin.attributes.create', [
            'attribute' => $attribute,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AttributeFormRequest $request
     * @param  Attribute $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeFormRequest $request, Attribute $attribute)
    {
        $attribute->update($request->validated());

        return redirect(route('admin.attributes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Attribute $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        return redirect(route('admin.attributes.index'));
    }
}
