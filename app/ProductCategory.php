<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

    protected $fillable=[
        'brand_name','product_name','product_code','product_image','category','price','product_status'
    ];
    protected $table = 'product_categories';
}
