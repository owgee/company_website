<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    /**
     * Generated
     */

    protected $primaryKey = 'contact_id';
    protected $table = 'contacts';
    protected $fillable = ['contact_id', 'visitorname', 'email', 'phonenumber', 'message', 'received_at'];



}
