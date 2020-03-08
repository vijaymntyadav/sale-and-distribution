<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable=[
        'permission_name',
        'permission_for'
    ];
    protected $table='permissions';
}
