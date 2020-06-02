<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTest extends Model
{
    protected $fillable = [
        'car_id',
        'first_name',
        'last_name',
        'email',
        'made_the_booking',
        'booking_date'
    ];
}
