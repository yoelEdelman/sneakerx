<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class OrdersProducts extends Model
{
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }
}
