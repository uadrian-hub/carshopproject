<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    protected $uploads = '/images/';
    protected $fillable = ['path'];


    public function getPathAttribute($carImage)
    {
        return $this->uploads . $carImage;
    }



} // End Of Class
