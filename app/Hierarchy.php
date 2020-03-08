<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hierarchy extends Model
{
    protected $fillable = [
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
    ];
    protected $table = 'hierarchies';
    public function u_manager(){
        return $this->belongsTo(User::class,'manager_id');
    }
    public function u_regional_manager(){
        return $this->belongsTo(User::class,'regional_manager_id');
    }
    public function u_area_sales_manager(){
        return $this->belongsTo(User::class,'area_sales_manager_id');
    }
    public function u_executive(){
        return $this->belongsTo(User::class,'executive_id');
    }
}
