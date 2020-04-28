<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
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
    public function getCreatedNewsDateForHumans()
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
     * Get the author of the news.
     *
     * @return \Illuminate\Database\Eloquent\belongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Get all of the images for the news.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
