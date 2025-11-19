<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'mail',
        'location',
        'phone',
        'mobile',
        'working_day_summary',
        'latitude',
        'longitude',
    ];

    public function workingTimes()
    {
        return $this->hasMany(WorkingTime::class);
    }
}
