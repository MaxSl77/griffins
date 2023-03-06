<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondTeam extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'second_name',
    ];

    public function second_events()
    {
        return $this->belongsToMany(SecondEvent::class, 'second_event_team');
    }
}
