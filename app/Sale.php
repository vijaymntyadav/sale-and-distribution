<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
      'em_id','em_name','em_email','position','number','code','organization_name','address','date','mobile_number',
      'p_o_number','project','brand_name','product_code','product_name','category','price','pieces','total_price',
      'total_amount','commission','current_amount', 'old_outstanding','total_outstanding','amount_writing_store','permission'
    ];
    protected $table = 'sales';
    public function AllSale(){
       return $this->hasOne(AllSale::class,'sale_id');
    }
}
