<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $primaryKey = 'user_id';
    protected $table = 'users';
    protected $fillable = ['user_id', 'username', 'first_name', 'second_name', 'phone_number', 'address', 'email', 'password', 'remember_token'];


    public function roles() {
        return $this->hasMany(\App\Models\Role::class, 'user_id', 'user_id');
    }


}
