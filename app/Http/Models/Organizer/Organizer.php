<?php

namespace App\Http\Models\Organizer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\User\User;

class Organizer extends Model
{
    const PhotoDir = 'assets/organizers/photo';

    use SoftDeletes;

    protected $fillable = [
        'id',
        'identity_id',
        'photo',
        'full_name',
        'address',
        'home_phone',
        'mobile_phone',
        'line_id',
        'instagram_id',
        'facebook_id',
        'website_link',
    ];

    protected $dates = ['deleted_at'];

    public function organizer_event()
    {
        return $this->hasMany(OrganizerEvent::class);
    }

    public function user()
    {
        return $this->morphOne(User::class, 'organizer_participant');
    }
}
