<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTest extends Model
{

    public $timestamps = false;
    
    protected $fillable = [
        'car_id',
        'unique_sku',
        'first_name',
        'last_name',
        'email',
        'made_the_booking',
        'booking_date'
    ];
}
