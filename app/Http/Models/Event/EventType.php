<?php

namespace App\Http\Models\Event;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'category',
        'type',
        'level',
        'total_points',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'total_points' => 'integer',
    ];

    public function event()
    {
        return $this->hasOne(Event::class);
    }
}
