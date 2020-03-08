<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    protected $fillable = [
      'commission',
      'status',
    ];
    protected $table = 'commissions';
}
