<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NearbyProperty extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'home_property_id',
        'type',
        'name',
        'distance',
        'rating',
    ];
}
