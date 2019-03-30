<?php

namespace App\Http\Models\Performer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Performer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'full_name',
        'type',
        'status',
    ];

    protected $dates = ['deleted_at'];

    public function performer_event()
    {
        return $this->hasMany(PerformerEvent::class);
    }
}
