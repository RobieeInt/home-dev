<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterCity extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'master_cities';

    protected $fillable = [
        'name',
        'slug',
        'province_id',
    ];

    public function province()
    {
        return $this->belongsTo(MasterProvince::class);
    }
}
