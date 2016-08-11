<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    /**
     * Generated
     */
    protected $primaryKey = 'client_id';
    protected $table = 'clients';
    protected $fillable = ['user_id', 'clientname', 'clientimgurl', 'clientweburl', 'clientdescription'];


    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    public function portfolios() {
        return $this->hasMany(\App\Models\Portfolio::class, 'client_id', 'client_id');
    }


}
