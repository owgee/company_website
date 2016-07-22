<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'email', 'password', 'permissions', 'activated', 'activation_code', 'activated_at', 'last_login', 'persist_code', 'reset_password_code', 'first_name', 'last_name', 'username'];
    protected $primaryKey = 'user_id';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->hasMany(\App\Models\Role::class, 'user_id', 'user_id');
    }

    protected $table = 'users';


    public function clients()
    {
        return $this->hasMany(\App\Models\Client::class, 'user_id', 'id');
    }
}
