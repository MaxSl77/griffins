<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'album_id',
    ];

    public function albums(){
        return $this->belongsTo(Album::class);
    }
}
