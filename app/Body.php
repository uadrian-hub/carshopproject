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
        $this->belongsTo(Car::class);
    }

    public function brand()
    {
        $this->hasMany(Brand::class);
    }

    public function modelCar()
    {
        $this->hasMany(ModelCar::class);
    }


} // End Of class
