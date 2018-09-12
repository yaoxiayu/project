<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function shopping()
    {
    	return $this->belongsTo('App\Shopping');
    }
    
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
