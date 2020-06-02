<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taggable extends Model
{

    protected $fillable = ['tag_id', 'taggable_id', 'name'];

    // public function models()
    // {
    //     return $this->morphedByMany(ModelCar::class, 'id', 'brand_id');
    // }

    // public function brands()
    // {
    //     return $this->morphedByMany(Brand::class, 'id', 'name');
    // }

}
