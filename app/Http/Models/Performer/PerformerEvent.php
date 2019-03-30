<?php

namespace App\Http\Models\Performer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\Event\Event;

class PerformerEvent extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'performer_id',
        'event_id',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'performer_id' => 'integer',
        'event_id' => 'integer',
    ];

    public function performer()
    {
        return $this->belongsTo(Performer::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
