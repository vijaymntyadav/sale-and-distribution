<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationWiseProduct extends Model
{
    protected $fillable = [
      'division','district','sub_district','postal_code','product_code','product_name','category','price','pieces'
    ];
    protected $table = 'location_wise_products';
}
