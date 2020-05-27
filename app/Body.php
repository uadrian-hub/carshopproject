<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
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

    public function modelCar()
    {
       return $this->hasMany(ModelCar::class);
    }


} // End Of class
