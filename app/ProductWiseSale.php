<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductWiseSale extends Model
{
    protected $fillable = [
        'product_code','product_name','category','price','pieces'
    ];
    protected $table = 'product_wise_sales';
}
