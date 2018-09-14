<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop_user_tag extends Model
{
    protected $table = 'shop_user_tag';

    public function Tag()
    {
        return $this->hasOne('App\Tag','id','tag_id');
    }
}
