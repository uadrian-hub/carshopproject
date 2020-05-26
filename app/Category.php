<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillable = [
        'name'
    ];

    public function car()
    {
        $this->belongsTo(Car::class);
    }


    
} // End Of Class
