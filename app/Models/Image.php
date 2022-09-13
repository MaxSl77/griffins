<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'post_id',
    ];

    public function photos() {
        return $this->belongsTo(Photo::class);
    }
}
