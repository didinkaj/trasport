<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_vehicle extends Model
{
    //
    protected $fillable = [
         'users_id','vehicles_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    
}
