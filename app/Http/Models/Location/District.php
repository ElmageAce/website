<?php

namespace App\Http\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'province_id',
        'city_id',
        'name',
    ];

    protected $dates = ['deleted_at'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function subdistrict()
    {
        return $this->hasMany(Subdistrict::class);
    }
}
