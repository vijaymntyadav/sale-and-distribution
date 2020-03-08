<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllSale extends Model
{
    protected $fillable = [
        'sale_id','em_id','em_name','em_email','position','m_id','m_name','m_email','rm_id','rm_name','rm_email','asm_id','asm_name','asm_email',
        'e_id','e_name','e_email','d_id','d_name','d_code','division','district','sub_district','postal_code','number','code','organization_name',
        'address','date','mobile_number','p_o_number','project','brand_name','product_code','product_name','category','price','pieces','total_price','total_amount','commission',
        'current_amount','old_outstanding','total_outstanding','amount_writing_store','cancel','cancel_u_name','cancel_u_email','cancel_description','sm_approved','sm_name',
        'sm_email','account_approved','account_name','account_email','md_approved','md_name','md_email','distributor',
    ];
    protected $table = 'all_sales';
    public function Sale(){
        return $this->belongsTo(Sale::class,'sale_id');
    }
}
