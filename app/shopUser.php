<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class shopUser extends Model
{
	use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'shop_users';
     public function industry()
    {
    	return $this->belongsTo('App\Industry');
    }
    
    public function tag()
	{
		return $this->belongsToMany('App\Tag');
	}

}
