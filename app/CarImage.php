<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    
    protected $fillable = [
        'unique_sku',
        'path'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }


} // End Of Class
