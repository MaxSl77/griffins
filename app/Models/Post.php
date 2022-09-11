<?php

namespace App\Models;

use App\Casts\FileUploadCast;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    const NO_IMAGE = 'uploads/no-image.jpg';

    protected $fillable = [
        "title",
        "description",
        "preview",
        "thumbnail",
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

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy("created_at");
    }
}
