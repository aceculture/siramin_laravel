<?php

namespace App\Model\Device;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    public function ports()
    {
        return $this->hasMany('App\Model\Device\Port');
    }
}
