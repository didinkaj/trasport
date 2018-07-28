<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintainance extends Model
{
    //
    protected $fillable = [
        'description', 'start_date','end_date','vehicles_id','users_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

