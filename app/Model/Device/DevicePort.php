<?php

namespace App\Model\Device;

use Illuminate\Database\Eloquent\Model;

class DevicePort extends Model
{
    protected $table = 'device_port';

    protected $timestamps = true;

    protected $dateFormat = 'U';

    public function belongsToDevice(){
        return $this->belongsTo('\App\Model\Device\Device', 'device_token', 'device_token');
    }
}
