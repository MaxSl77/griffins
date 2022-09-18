<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Album\CreateAlbumRequest;
use App\Http\Requests\Admin\Album\DestroyAlbumRequest;
use App\Http\Requests\Admin\Album\EditAlbumRequest;
use App\Http\Requests\Admin\Album\IndexAlbumRequest;
use App\Http\Requests\Admin\Album\ShowAlbumRequest;
use App\Http\Requests\Admin\Album\StoreAlbumRequest;
use App\Http\Requests\Admin\Album\UpdateAlbumRequest;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index(IndexAlbumRequest $id)
    {
        $albums = Album::all();
        return view('admin.albums.index', ['albums' => $albums]);
    }

    public function create(CreateAlbumRequest $request)
    {
        return view('admin.albums.create', []);
    }

    public function store(StoreAlbumRequest $request, Album $album)
    {
        $album = Album::create($request->validated());

        if ($request->has('photos')) {
            foreach ($request->file('photos') as $photo) {
                $imageName = 'uploads/' . 'photo' . time() . rand(1, 1000) . '.' . $photo->extension();
                $photo->move(public_path('storage/uploads'), $imageName);
                Photo::create([
                    'album_id' => $album->id,
                    'photo' => $imageName
                ]);
            }
        }

        return redirect()->route('admin.albums.index');
    }

    public function show(ShowAlbumRequest $request, Album $album)
    {
        //
    }


    public function edit(EditAlbumRequest $request, Album $album)
    {
        $photos = $album->photos()->get();
        return view('admin.albums.edit', ['album' => $album, 'photos' => $photos]);
    }

    public function update(UpdateAlbumRequest $request, Album $album)
    {
        $album->update($request->validated());

        if ($request->has('photos')) {
            foreach ($request->file('photos') as $photo) {
                $imageName = 'uploads/' . 'photo' . time() . rand(1, 1000) . '.' . $photo->extension();
                $photo->move(public_path('storage/uploads'), $imageName);
                Photo::create([
                    'album_id' => $album->id,
                    'photo' => $imageName
                ]);
            }
        }

        return redirect()->route('admin.albums.index');
    }

    public function destroy(DestroyAlbumRequest $request, Album $album)
    {
        $album->delete();
        return redirect()->route('admin.albums.index');
    }

    public function deletePhoto($id)
    {
        $photos = Photo::findOrFail($id);
        if (Storage::exists($photos->photo)){
            Storage::delete($photos->photo);
        }

        Photo::findOrFail($id)->delete();
        return back();
    }
}
