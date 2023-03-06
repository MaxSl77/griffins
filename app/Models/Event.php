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
        'second_datetime',
        'second_place',
        'second_type',
        'second_description',
        'second_locker_room',
    ];

    protected $casts = [
      'datetime' => 'datetime:Y-m-d H:00',
      'second_datetime' => 'datetime:Y-m-d H:00'
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'event_team');
    }

    public function second_teams()
    {
        return $this->belongsToMany(SecondTeam::class, 'second_event_team');
    }
}
