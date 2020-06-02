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
        'photo_id',
        'brand',
        'transmision_type',
        'model'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function carImage()
    {
        return $this->belongsTo(CarImage::class, 'photo_id');
    }

    public function carBody()
    {
        return $this->belongsTo(Body::class);
    }

    public function carModel()
    {
        return $this->belongsTo(ModelCar::class, 'model');
    }

    public function carBrand()
    {
        return $this->belongsTo(Brand::class, 'brand');
    }

    public function carCondition()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'sale_type');
    }

    public function transmision()
    {
        return $this->belongsTo(Transmision::class, 'transmision_type');
    }


} // End Of Class
