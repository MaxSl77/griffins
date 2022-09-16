<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AlbumFormRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('admin.album.index', ['albums' => $albums]);
    }

    public function create()
    {
        return view("admin.album.create", []);
    }

    public function store(AlbumFormRequest $request, Album $album)
    {
        $album = Album::create($request->validated());

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = 'uploads/' . 'image' . time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('storage/uploads'), $imageName);
                Image::create([
                    'album_id' => $album->id,
                    'image' => $imageName
                ]);
            }
        }

        return view('admin.album.index');
    }


    public function edit(AlbumFormRequest $request, Album $album)
    {
        return view("admin.album.edit", ["album" => $album]);
    }

    public function update(AlbumFormRequest $request, Album $album)
    {
        $album->update($request->validated());

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = 'uploads/' . 'image' . time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('storage/uploads'), $imageName);
                Image::create([
                    'album_id' => $album->id,
                    'image' => $imageName
                ]);
            }
        }

        return view('admin.album.index');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        return redirect(route('admin.album.index'));
    }

    public function deletePhoto($id)
    {
        $images = Album::findOrFail($id);
        if (Storage::exists($images->image)){
            Storage::delete($images->image);
        }

        Album::findOrFail($id)->delete();
        return back();
    }

    public function deleteThumbnail($id)
    {
        $thumbnail = Album::findOrFail($id);
        if (Storage::exists($thumbnail->thumbnail)){
            Storage::delete($thumbnail->thumbnail);
        }

        Album::findOrFail($id)->delete();
        return back();
    }
}
