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
        'condition_id',
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
        return $this->belongsTo(ModelCar::class);
    }

    public function carBrand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function carCondition()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'sale_type');
    }

} // End Of Class
