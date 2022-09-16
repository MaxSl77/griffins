<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{
    use HasFactory;

    const NO_IMAGE = '/uploads/no-image.png';

    protected $fillable =[
      'title',
      'author',
      'body',
      'thumbnail',
    ];

    public function getThumbnailAttribute($value)
    {
        if($value != null){
            return $value ;
        }

        return self::NO_IMAGE;
    }

    public function setThumbnailAttribute($value)
    {

        if ($value instanceof UploadedFile) {

            if ($this->thumbnail !== self::NO_IMAGE && Storage::exists($this->thumbnail)) {
                Storage::delete($this->thumbnail);
            }

            $this->attributes['thumbnail'] = $value->store("uploads");
        }
    }


    public function images() {
        return $this->hasMany(Image::class);
    }
}
