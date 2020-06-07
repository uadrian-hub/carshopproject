<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    protected $fillable = [
        'event_name',
        'start_date',
        'end_date',
        'car_id',
        'unique_sku',
        'first_name',
        'last_name',
        'email'
    ];
}
