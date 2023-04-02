<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutus extends Model
{
    use HasFactory;

    protected $table = 'aboutus';

    protected $fillable = [
        'title',
        'description',
        'image',
        'image2',
        'video',
        'slug',
        'status',
    ];
}
