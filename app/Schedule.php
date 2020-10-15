<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'amount', 'tracking_number', 'user_id', 'phone', 'desc', 'package_value', 'package_size','pickup_date', 'pickup_time', 'pickup_loc', 'pickup_addr', 'dropoff_loc', 'dropoff_addr', 'delivery_opt', 'name', 'email', 'status', 'payment_reference'
      ];
}
