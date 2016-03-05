<?php

namespace App\Model\Device;

use Illuminate\Database\Eloquent\Model;

class DevicePort extends Model
{
    protected $table = 'device_port';

    protected $appends = ['username'];

    public function getUsernameAttribute()
    {
        return $this->users()->first()->user_id;
    }

    //
    public function device()
    {
        return $this->belongsTo('App\Model\Device\Device', 'device_token', 'device_token');
    }

    /**
     * one port from one device, belongs to single user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsToMany('App\Model\User', 'user_device', 'port_id', 'user_id');
    }

    /**
     * Logging
     */
    public function wateringLogs()
    {
        return $this->hasMany('App\Model\Log\Watering', 'port_id', 'id');
    }

    public function sensorLog()
    {
        return $this->hasMany('App\Model\Log\Sensor', 'port_id', 'id');
    }
}
