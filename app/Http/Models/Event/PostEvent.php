<?php

namespace App\Http\Models\Event;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostEvent extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'event_id',
        'post_image',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'event_id' => 'integer',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
