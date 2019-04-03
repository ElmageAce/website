<?php

namespace App\Http\Models\Faculty;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Models\Department\Department;

class Faculty extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
    ];

    protected $dates = ['deleted_at'];

    public function department()
    {
        return $this->hasMany(Department::class);
    }
}
