<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'brand_name',
        'product_name',
        'product_code',
        'category',
        'stock_measurement',
        'store_date',
        'slug'
    ];
    protected $table = 'stocks';
}
