<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Schedule extends Model
{
    
    protected $fillable = [
        'time_speaker',
        'topic_title',
        'speaker',
        'sesi_id'
    ];

    public function sesi() : BelongsTo
    {
        return $this->belongsTo(ScheduleSession::class, 'sesi_id');
    }

    public function faculties(): BelongsToMany
    {
        return $this->belongsToMany(Faculty::class, 'faculty_schedule');
    }
}
