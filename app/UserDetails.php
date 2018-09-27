<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_details';
    protected $fillable = ['full_name', 'company', 'profession', 'usage'];

    public function vehicle()
    {
    	return $this->hasOne('App\VehicleDetails', 'userdetails_id');
    }
}
