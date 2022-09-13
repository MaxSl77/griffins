<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
      'title',
      'body',
      'cover',
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }
}
