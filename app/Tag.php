<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function industry()
   {
     return $this->belongsTo('App\Industry','industry_id','id');
   }
   public function shopUser()
   {
     return $this->belongsTo('App\shopUser');
   }
   
}
