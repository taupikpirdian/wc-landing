<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurAdvantage extends Model
{
    protected $fillable = [
        'number',
        'title',
        'desc',
        'icon',
        'enable_main_slider',
        'enable_slider',
    ];
}
