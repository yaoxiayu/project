<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function shopping()
    {
    	return $this->belongsTo('App\Shopping');
    }
}
