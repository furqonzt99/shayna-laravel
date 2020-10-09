<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'product';

    protected $fillable = [
        'name', 'type', 'description', 'slug', 'price', 'quantity'
    ];

    protected $hidden = [

    ];


    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'product_id');
    }

}
