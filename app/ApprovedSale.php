<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprovedSale extends Model
{
    protected $fillable =[
        'sale_id','all_sale_id','em_id','em_name','em_email','position','challan_no','m_id','m_name','m_email','rm_id','rm_name','rm_email','asm_id','asm_name','asm_email',
        'e_id','e_name','e_email','d_id','d_name','d_code','division','district','sub_district','postal_code','number','code','organization_name',
        'address','date','mobile_number','p_o_number','project','brand_name','product_code','product_name', 'category','price','pieces','pieces_total','total_price','add_pieces',
        'add_pieces_total_price','sum_of_add_pieces_total_price','add_pieces_total','final_total_pieces','amount_of_total_pieces','total_amount','commission', 'current_amount',
        'old_outstanding','total_outstanding','amount_writing_store', 'final_total_price','amount_of_total_price','amount_of_current_amount','amount_of_total_outstanding'
    ];
    protected $table = 'approved_sales';
}
