<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();

        return view('albums.index', [
            "albums" => $albums,
        ]);
    }

    public function show($id)
    {
        $album = Album::findOrFail($id);
        $photos = $album->photos()->get();
        return view('albums.show', [
            'album' => $album,
            'photos' => $photos,
        ]);
    }
}
