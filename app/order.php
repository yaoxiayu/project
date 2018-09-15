<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'orders';

	//订单跟用户的模型关系  属于
    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }

    //订单跟商品的模型关系  属于
    public function shopping()
    {
    	return $this->belongsTo('App\Shopping','shopping_id','id');
    }
}
