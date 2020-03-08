<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'brand_name',
        'product_name',
        'product_code',
        'category',
        'store',
        'booking_product',
        'product_availability'
    ];
    protected $table = 'warehouses';
}
