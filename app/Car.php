<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    
    protected $fillable = [
        'unique_sku',
        'name',
        'year',
        'short_description',
        'description',
        'mileage',
        'price',
        'sale_type',
        'photo_id'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function carImage()
    {
        return $this->belongsTo(CarImage::class);
    }

    public function carBody()
    {
        return $this->belongsToMany(Body::class);
    }

    public function carModel()
    {
        return $this->belongsToMany(ModelCar::class);
    }

    public function carBrand()
    {
        return $this->belongsToMany(Brand::class);
    }

} // End Of Class
