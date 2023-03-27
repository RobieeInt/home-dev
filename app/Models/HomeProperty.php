<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeProperty extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'unit_id',
        'address',
        'city_id',
        'province_id',
        'zip',
        'country',
        'description',
    ];


    public function unit()
    {
        return $this->belongsTo(MasterUnit::class);
    }

    public function province()
    {
        return $this->belongsTo(MasterProvince::class);
    }

    public function city()
    {
        return $this->belongsTo(MasterCity::class);
    }

    public function detail()
    {
        return $this->hasOne(DetailProperty::class);
    }

    public function amenities()
    {
        return $this->hasMany(AmenitiesProperty::class);
    }

    public function nearby()
    {
        return $this->hasMany(NearbyProperty::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(GalleryProperty::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
