<?php

namespace App\Http\Models\Participant;;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\User\User;

class Participant extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'full_name',
        'photo',
        'identity_number',
        'gender',
        'address',
        'province_id',
        'city_id',
        'district_id',
        'subdistrict_id',
        'postal_code',
        'home_phone',
        'mobile_phone',
        'department_id',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'department_id' => 'integer',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function participant_event()
    {
        return $this->hasMany(ParticipantEvent::class);
    }

    public function user()
    {
        return $this->morphOne(User::class, 'organizer_participant');
    }
}
