<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
//        'delayed' => false,
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the created news date in humans format.
     *
     * @return string
     */
    public function getActiveProducts()
    {
        return count(Brand::products()->where('is_published', 1)->get());
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    /**
     * Get the products of the brand.
     *
     * @return \Illuminate\Database\Eloquent\hasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get all of the images for the product.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
