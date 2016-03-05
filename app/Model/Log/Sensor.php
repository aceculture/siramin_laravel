<?php

namespace App\Model\Log;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //
    public function port()
    {
        return $this->belongsToMany('App\Model\Device\Port');
    }
}
