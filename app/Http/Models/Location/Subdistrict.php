<?php

namespace App\Http\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subdistrict extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'province_id',
        'city_id',
        'district_id',
        'name',
        'postal_code',
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

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
