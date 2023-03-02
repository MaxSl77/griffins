<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'datetime',
        'place',
        'type',
        'description',
        'locker_room',
        'underline',
    ];

    protected $casts = [
      'datetime' => 'datetime:Y-m-d H:00'
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'event_team');
    }
}
