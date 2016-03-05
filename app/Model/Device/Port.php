<?php

namespace App\Model\Device;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    //
    public function device()
    {
        return $this->belongsTo('App\Model\Device\Device');
    }

    public function users()
    {
        return $this->belongsToMany('App\Model\User');
    }

    /**
     * Logging
     */
    public function wateringLogs()
    {
        return $this->hasMany('App\Model\Log\Watering');
    }

    public function sensorLog()
    {
        return $this->hasMany('App\Model\Log\Sensor');
    }
}
