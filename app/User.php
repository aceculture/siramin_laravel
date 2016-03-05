<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'users';

    public $timestamps = true;

    protected $dateFormat = 'U';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'email', 'password',
    ];

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
    function deviceUser(){
        return $this->hasMany('\App\UserDevice', 'user_id', 'user_id');
    }
}
