<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    
    protected $fillable = [
        'name',
        'brand_id'
    ];

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'brand_models', 'brand_id', 'model_id');
    }


} // End Of Class
