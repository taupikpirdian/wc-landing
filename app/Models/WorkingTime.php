<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingTime extends Model
{
    protected $fillable = [
        'contact_us_id',
        'day',
        'open_time',
        'close_time',
        'is_closed',
    ];

    public function contactUs()
    {
        return $this->belongsTo(ContactUs::class);
    }
}
