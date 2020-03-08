<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'brand_name',
        'brand_description',
        'brand_status',
    ];
    protected $table = 'brands';
}
