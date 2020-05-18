<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'address', 'zipcode',
    ];

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
//    protected $guarded = [];
}
