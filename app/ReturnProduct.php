<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnProduct extends Model
{
    protected $fillable = [
        'approved_sale_id',
        'em_id',
        'em_name',
        'em_email',
        'position',
        'challan_no',
        'number',
        'code',
        'organization_name',
        'address',
        'date',
        'mobile_number',
        'p_o_number',
        'project',
        'product_code',
        'product_name',
        'category',
        'pieces',
    ];
    protected $table = 'returns';
}
