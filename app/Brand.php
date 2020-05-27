<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    
    protected $fillalbe = [
        'name'
    ];


    public function car()
    {
       return $this->hasMany(Car::class);
    }

    public function modelCar()
    {
       return $this->belongsTo(ModelCar::class);
    }


}
