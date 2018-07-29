<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable = [
        'description', 'start_date','end_date','users_id','vehicles_id','events_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function seat_reservations()
    {
        return $this->hasMany('App\Seat_reservation');
    }
}

