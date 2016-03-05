<?php

namespace App\Model\Device;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'device';

    public $timestamps = true;

    protected $dateFormat = 'U';

    public function userDevicePort(){
        return $this->hasMany('\App\Model\Device\UserDevice', 'device_token', 'device_token');
    }

    public function devicePortDetail(){
        return $this->hasMany('\App\Model\Device\DevicePort', 'device_token', 'device_token');
    }
}
