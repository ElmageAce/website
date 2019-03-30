<?php

namespace App\Http\Models\Organizer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\Event\Event;

class OrganizerEvent extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'organizer_id',
        'event_id',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'organizer_id' => 'integer',
        'event_id' => 'integer',
    ];

    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
