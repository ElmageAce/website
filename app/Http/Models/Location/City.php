<?php

namespace App\Http\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'province_id',
        'name',
    ];

    protected $dates = ['deleted_at'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function district()
    {
        return $this->hasMany(District::class);
    }

    public function subdistrict()
    {
        return $this->hasMany(Subdistrict::class);
    }
}
