<?php

namespace App\Model\Device;

use Illuminate\Database\Eloquent\Model;

class UserDevice extends Model
{
    protected $table = 'user_device';

    public $timestamps = true;

    protected $dateFormat = 'U';

    /**
     * one port from one device, belongs to single user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function belongsToUser(){
        return $this->belongsTo('\App\User', 'user_id', 'user_id');
    }
}