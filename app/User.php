<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone', 'password','role','role_description','two_fa_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function events()
    {
        return $this->hasMany('App\Events');
    }
    
    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
    
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }
    
    public function maintainances()
    {
        return $this->hasMany('App\Maintainance');
    }
    
    public function scopeDrivers($query)
    {
        return $query->where('role', '=', 2);
    }
    
    
    public function scopeAdmins($query)
    {
        return $query->where('role', '=', 0);
    }
    
    public function scopeUsers($query)
    {
        return $query->where('role', '=', 1);
    }
    
}
