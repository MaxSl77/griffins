<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Timetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_at',
        'day_of_the_week',
        'time',
        'type',
        'place',
        'teams',
        'locker_room',
    ];

//    protected $casts = [
//        'start_at' => 'datetime'
//    ];

//    public function firstTeam(): BelongsTo
//    {
//        return $this->belongsTo(Team::class);
//    }
//
//    public function secondTeam(): BelongsTo
//    {
//        return $this->belongsTo(Team::class);
//    }
}
