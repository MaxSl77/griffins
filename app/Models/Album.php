<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{
    use HasFactory;

    const NO_IMAGE = '/uploads/no-image.png';

    protected $fillable = [
        'title',
        'body',
        'image',
    ];

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function setImageAttribute($value)
    {
        if ($value instanceof UploadedFile) {

            if ($this->image !== self::NO_IMAGE && Storage::exists($this->image)) {
                Storage::delete($this->image);
            }

            $this->attributes['image'] = $value->store('uploads');
        }
    }

    public function getImageAttribute($value)
    {
        {
            if ($value !== null) {
                return $value;
            }
            return self::NO_IMAGE;
        }
    }

    public function getPhotosAttribute($value)
    {
        {
            if ($value !== null) {
                return $value;
            }

            return self::NO_IMAGE;
        }
    }
}
