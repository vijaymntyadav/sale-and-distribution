<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntryVisit extends Model
{
    protected $fillable = [
      'em_id','em_name','em_email','dealer_name','date','in_time','out_time','order_status','mode_of_transport'
    ];
    protected $table = 'entry_visits';
}
