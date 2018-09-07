<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class shopping extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

   public function shopuser()
    {
    	return $this->belongsTo('App\shopUser','shopUser_id','id');
    }
}
