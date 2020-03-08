<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'gender',
        'image',
        'email',
        'phone',
        'nid',
        'address',
        'area',
        'position',
        'role',
        'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
    public function AauthAcessToken(){
        return $this->hasMany(OauthAccessToken::class);
    }
    public function h_manager(){
        return $this->hasOne(Hierarchy::class,'manager_id');
    }
    public function h_regional_manager(){
        return $this->hasOne(Hierarchy::class,'regional_manager_id');
    }
    public function h_area_sales_manager(){
        return $this->hasOne(Hierarchy::class,'area_sales_manager_id');
    }
    public function h_executive(){
        return $this->hasOne(Hierarchy::class,'executive_id');
    }
    public function dealer(){
        return $this->hasOne(Dealer::class,'user_id');
    }
}
