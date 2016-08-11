<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {

    /**
     * Generated
     */

    protected $primaryKey = 'portfolio_id';
    protected $table = 'portfolio';
    protected $fillable = ['portfolio_id', 'portfolioname', 'imageurl', 'description', 'client_id', 'user_id', 'uploaded_at'];

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    public function client() {
        return $this->belongsTo(\App\Models\Client::class, 'client_id', 'client_id');
    }


}
