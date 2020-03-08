<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $fillable = [
        'user_id',
        'manager_id',
        'manager_name',
        'manager_email',
        'regional_manager_id',
        'regional_manager_name',
        'regional_manager_email',
        'area_sales_manager_id',
        'area_sales_manager_name',
        'area_sales_manager_email',
        'executive_id',
        'executive_name',
        'executive_email',
        'dealer_name',
        'dealer_code',
    ];
    protected $table = 'dealers';
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
