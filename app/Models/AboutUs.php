<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'image_testimony',
        'vission',
        'mission',
        'since',
    ];

    protected $casts = [
        'mission' => 'array',
    ];
}
