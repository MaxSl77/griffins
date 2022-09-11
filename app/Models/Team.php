<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
    ];


    const NO_IMAGE = 'uploads/no-image.jpg';


    public function getLogoAttribute($value)
    {
        if($value != null){
            return $value ;
        }

        return self::NO_IMAGE;
    }

    public function setLogoAttribute($value)
    {

        if ($value instanceof UploadedFile) {

            if ($this->logo !== self::NO_IMAGE && Storage::exists($this->logo)) {
                Storage::delete($this->logo);
            }

            $this->attributes['logo'] = $value->store("uploads");
        }
    }


    public function timetable()
    {
        return $this->hasMany(Timetable::class);
    }
}
