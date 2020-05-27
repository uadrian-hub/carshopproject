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
       return $this->belongsTo(Car::class);
    }

    public function brand()
    {
       return $this->hasMany(Brand::class);
    }


} // End Of Class
