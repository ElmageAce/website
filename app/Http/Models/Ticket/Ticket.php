<?php

namespace App\Http\Models\Ticket;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\Event\Event;
use App\Http\Models\Payment\Payment;

class Ticket extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'price',
        'qty',
        'event_id',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'price' => 'double',
        'event_id' => 'integer',
        'qty' => 'integer',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
