<?php

namespace App\Http\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
    ];

    protected $dates = ['deleted_at'];

    public function city()
    {
        return $this->hasMany(City::class);
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
