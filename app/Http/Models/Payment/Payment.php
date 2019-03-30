<?php

namespace App\Http\Models\Payment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\Ticket\Ticket;
use App\Http\Models\Participant\Participant;

class Payment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'payment_id',
        'ticket_id',
        'participant_id',
        'payment_date',
        'verification_date',
        'qty',
        'subtotal',
        'total',
        'proof_payment',
        'status',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'ticket_id' => 'integer',
        'participant_id' => 'integer',
        'payment_date' => 'datetime',
        'verification_date' => 'datetime',
        'qty' => 'integer',
        'subtotal' => 'double',
        'total' => 'double',  
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
