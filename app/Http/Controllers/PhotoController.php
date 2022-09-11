<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();

        return view('photos.index', [
            "photos" => $photos,
        ]);
    }

    public function show($id)
    {
        $photo = Photo::findOrFail($id);

        return view('photos.show', [
            "photo" => $photo,
        ]);
    }
}
