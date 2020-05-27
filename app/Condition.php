<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    
    protected $fillable = ['name'];

    public function car()
    {
       return $this->hasMany(Car::class);
    }

} // End of class
