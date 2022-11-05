<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Timetable extends Model
{
    use HasFactory;

    const NO_IMAGE = 'uploads/no-image.jpg';

    protected $fillable = [
        'month',
        'date',
        'place',
        'championship',
        'type',
        'start_at',
        'teams',
        'locker_room',
        'place_2',
        'championship_2',
        'type_2',
        'start_at_2',
        'teams_2',
        'locker_room_2',
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
}
