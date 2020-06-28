<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'is_published' => false,
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
    public function getReleaseDateForHumans()
    {
        $date = new carbon($this->created_at);
        return $date->diffForHumans();
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    /**
     * Get the brand of the product.
     *
     * @return \Illuminate\Database\Eloquent\belongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    /**
     * Get all orders of an product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    /**
     * Get all of the images for the product.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
