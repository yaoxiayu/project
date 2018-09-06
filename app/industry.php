<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class industry extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function shopuser()
    {
    	return $this->hasMany('App\shopUser');
    }
}
