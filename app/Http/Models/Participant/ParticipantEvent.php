<?php

namespace App\Http\Models\Participant;;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\Event\Event;

class ParticipantEvent extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'participant_id',
        'event_id',
        'attendance_status',
        'rating',
        'comment',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'participant_id' => 'integer',
        'event_id' => 'integer',
        'rating' => 'double',
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
