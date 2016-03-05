<?php

namespace App\Model\Log;

use Illuminate\Database\Eloquent\Model;

class Watering extends Model
{
    //
    public function port()
    {
        return $this->belongsToMany('App\Model\Device\Port');
    }
}
