<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopUser extends Model
{
     public function industry()
    {
    	return $this->belongsTo('App\Industry');
    }
}
