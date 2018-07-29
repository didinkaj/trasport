<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'capacity', 'no_plate','users_id','reservation_status','maintainance_status','assigned_status'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    
    public function setTitleAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
    
    public function scopeOnReservation($query)
    {
        return $query->where('reservation_status', '=', 1);
    }
    
    public function scopeNotOnReservation($query)
    {
        return $query->where('reservation_status', '=', 0);
    }
    
    public function scopeOnMaintainance($query)
    {
        return $query->where('maintainance_status', '=', 1);
    }
    
    public function scopeNotOnMaintainance($query)
    {
        return $query->where('maintainance_status', '=', 0);
    }
    
    public function scopeAssigned($query)
    {
        return $query->where('assigned_status', '=', 1);
    }
    
    public function scopeNotAssigned($query)
    {
        return $query->where('assigned_status', '=', 0);
    }
    
}
