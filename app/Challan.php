<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challan extends Model
{
    protected $fillable = [
        'sale_id','all_sale_id','em_id','em_name','em_email','position','challan_no','number','code','organization_name',
        'address','date','mobile_number','p_o_number','project','brand_name','product_code','product_name',
        'category','pieces','pieces_total','add_pieces','add_pieces_total','final_total_pieces','amount_of_total_pieces'
    ];
    protected $table = 'challans';
}
