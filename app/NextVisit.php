<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NextVisit extends Model
{
    protected $fillable = [
      'entry_id','em_id','em_name','em_email','dealer_name','date','in_time','out_time','order_status','collection_status','mode_of_transport','distance_from_previous_station'
    ];
    protected $table = 'next_visits';
}
