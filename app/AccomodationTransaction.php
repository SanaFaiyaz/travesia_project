<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccomodationTransaction extends Model
{
    //

     public function hotel()
    {
        return $this->hasOne('App\Hotel');
    }


     public function bedrooms()
    {
        return $this->hasMany('App\Bedroom');
    }
}
