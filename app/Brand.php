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
        $this->hasMany(Car::class);
    }

}
