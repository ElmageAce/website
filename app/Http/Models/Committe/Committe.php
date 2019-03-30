<?php

namespace App\Http\Models\Committe;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Committe extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'full_name',
        'identity_number',
        'position',
        'status',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'identity_number' => 'integer',
    ];

    public function committe_event()
    {
        return $this->hasMany(CommitteEvent::class);
    }
}
