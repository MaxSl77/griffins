<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PhotoFormRequest;
use App\Models\Photo;

class PhotoController extends Controller
{

    public function index()
    {
        $photos = Photo::all();

        return view("admin.photos.index", [
            "photos" => $photos,
        ]);
    }


    public function create()
    {
        return view("admin.photos.create", []);
    }


    public function store(PhotoFormRequest $request, Photo $photo)
    {
        Photo::create($request->validated());

        return redirect(route("admin.photos.index"));
    }


    public function edit(Photo $photo)
    {
        return view("admin.photos.create", [
            "photo" => $photo,
        ]);
    }


    public function update(PhotoFormRequest $request, Photo $photo)
    {
        $photo->update($request->validated());

        foreach ($request->file('thumbnail') as $file) {
            $file->store('uploads');
        }

        return redirect(route("admin.photos.index"));
    }


    public function destroy(Photo $photo)
    {
        $photo->delete();

        return redirect(route("admin.photos.index"));
    }
}
