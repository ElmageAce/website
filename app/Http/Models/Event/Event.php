<?php

namespace App\Http\Models\Event;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\Ticket\Ticket;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'address',
        'province_id',
        'city_id',
        'district_id',
        'subdistrict_id',
        'postal_code',
        'description',
        'event_type_id',
        'brochure',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'home_phone',
        'mobile_phone',
        'full_name_pic',
        'website_link',
        'qrcode',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'event_type_id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'start_time' => 'time',
        'end_time' => 'time'
    ];

    public function event_type()
    {
        return $this->belongsTo(EventType::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function post_event()
    {
        return $this->hasMany(PostEvent::class);
    }

    public function participant_event()
    {
        return $this->hasMany(ParticipantEvent::class);
    }

    public function organizer_event()
    {
        return $this->hasMany(OrganizerEvent::class);
    }

    public function performer_event()
    {
        return $this->hasMany(PerformerEvent::class);
    }

    public function committe_event()
    {
        return $this->hasMany(CommitteEvent::class);
    }
}
