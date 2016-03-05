<?php

namespace App\Model\Log;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = 'sensor_log';
    //
    public function port()
    {
        return $this->belongsToMany('App\Model\Device\Port');
    }
}
