<?php

namespace App\Http\Models\Department;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\Faculty\Faculty;
use App\Http\Models\Participant\Participant;

class Department extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'faculty_id',
        'status',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'faculty_id' => 'integer',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function participant()
    {
        return $this->hasMany(Participant::class);
    }
}
