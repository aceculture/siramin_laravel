<?php

namespace App\Model\Device;

use Illuminate\Database\Eloquent\Model;

class UserDevice extends Model
{
    protected $table = 'user_device';

    protected $dateFormat = 'U';

    //
    public function device()
    {
        return $this->belongsTo('App\Model\Device\Device');
    }

    /**
     * one port from one device, belongs to single user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsToMany('App\Model\User', 'user_id', 'user_id');
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
