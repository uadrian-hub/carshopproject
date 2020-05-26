<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    
    protected $fillable = [
        'unique_sku',
        'path'
    ];
}
