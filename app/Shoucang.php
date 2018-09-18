<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoucang extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function shopping()
    {
    	return $this->belongsTo('App\shopping');
    }
}
