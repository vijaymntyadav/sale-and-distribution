<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HierarchyWiseProduct extends Model
{
   protected $fillable = [
     'm_id','m_name','m_email','rm_id','rm_name','rm_email','asm_id','asm_name','asm_email','e_id','e_name','e_email','d_id','d_name','d_code',
     'product_code','product_name','category','price','pieces'
   ];
   protected $table = 'hierarchy_wise_products';
}
