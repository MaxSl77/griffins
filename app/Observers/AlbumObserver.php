<?php

namespace App\Observers;

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Support\Facades\Storage;

class AlbumObserver
{
    public function created()
    {
        //
    }

    public function updated()
    {
        //
    }

    public function deleted(Album $album)
    {
        $photos = $album->photos()->get();
        foreach ($photos as $photo){
            if (Storage::exists($photo->photo)){
                Storage::delete($photo->photo);
            }
        }
    }

    public function restored(Album $album)
    {
        //
    }


    public function forceDeleted(Album $album)
    {
        if ($album->image != Album::NO_IMAGE && Storage::exists($album->image)) {
            Storage::delete($album->image);
        }
    }
}
