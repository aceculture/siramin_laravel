<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Many to many relationship
     * User has many Port that they can control
     */
    public function ports()
    {
        return $this->belongsToMany('App\Model\Device\Port');
    }
}
