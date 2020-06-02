<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    
    protected $fillable = [
        'name',
    ];


    public function models()
    {
        return $this->belongsToMany(ModelCar::class, 'brand_models', 'brand_id', 'model_id');
    }
            
}
