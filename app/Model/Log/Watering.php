<?php

namespace App\Model\Log;

use Illuminate\Database\Eloquent\Model;

class Watering extends Model
{
    protected $table = 'watering_log';
    
    //
    public function port()
    {
        return $this->belongsTo('App\Model\Device\Port', 'port_id', 'id');
    }
}
