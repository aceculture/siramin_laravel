<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $dateFormat = 'U';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'email', 'password',
    ];
<<<<<<< c24cd5e0d12b54586f7384d7fd588bcfe2e8735d
    
    /**
     * one user can have many access to many device, many port
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
=======

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * one user can have many access to many device, many port
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
>>>>>>> Move Model class that in root app/ into app/Model/ namespace
    function deviceUser(){
        return $this->hasMany('\App\UserDevice', 'user_id', 'user_id');
    }

    public function ports()
    {
        return $this->belongsToMany('App\Model\Device\Port');
    }
}
