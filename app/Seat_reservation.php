<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat_reservation extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
}
