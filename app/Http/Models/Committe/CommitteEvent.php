<?php

namespace App\Http\Models\Committe;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\Event\Event;

class CommitteEvent extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'committe_id',
        'event_id',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'committe_id' => 'integer',
        'event_id' => 'integer',
    ];

    public function committe()
    {
        return $this->belongsTo(Committe::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
