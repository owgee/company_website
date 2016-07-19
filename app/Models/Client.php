<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    /**
     * Generated
     */

    protected $primaryKey = 'client_id';
    protected $table = 'clients';
    protected $fillable = ['client_id', 'clientname', 'clientimgurl', 'clientweburl', 'clientdescriptions'];


    public function portfolios() {
        return $this->hasMany(\App\Models\Portfolio::class, 'client_id', 'client_id');
    }


}
