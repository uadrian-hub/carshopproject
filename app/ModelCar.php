<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    
    protected $fillable = [
        'name'
    ];

    public function car()
    {
        $this->hasMany(Car::class);
    }

} // End Of Class
