<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceArea extends Model
{
    protected $table = 'service_areas';
    protected $fillable = [
        'title',
        'address',
        'image',
        'icon_pin_map',
        'latitude',
        'longitude',
    ];
}
