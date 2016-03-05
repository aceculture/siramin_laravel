<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $dateFormat = 'U';

    // Override default values because apparently we don't comply to Laravel
    // convention :<
    public $primaryKey = 'user_id';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'email', 'password',
    ];

    /**
     * one user can have many access to many device, many port
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function deviceUser(){
        return $this->hasMany('\App\Model\Device\UserDevice', 'user_id', 'user_id');
    }

    public function ports()
    {
        return $this->belongsToMany('App\Model\Device\DevicePort', 'user_device', 'user_id', 'port_id');
    }
}
