<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
     * Generated
     */

    protected $primaryKey = 'role_id';
    protected $table = 'roles';
    protected $fillable = ['role_id', 'name', 'user_id'];


    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'user_id');
    }


}
