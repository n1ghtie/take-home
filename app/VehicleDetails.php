<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleDetails extends Model
{
    protected $table = 'vehicle_details';
    protected $fillable = ['licence_plate', 'userdetails_id', 'make', 'model', 'color', 'engine_cc', 'no_wheels', 'no_doors', 'no_seats', 'weight_category', 'has_gps', 'has_sunroof', 'is_hgv', 'has_boot', 'has_trailer', 'fuel_type', 'transmission', 'type'];

    public function owner()
    {
    	return $this->belongsTo('App\UserDetails');
    }

    public function getMakeAndModel()
    {
    	return $this->make . ' ' . $this->model;
    }

    public function prettifyColor()
    {
    	return preg_replace('/(?<!\ )[A-Z]/', ' $0', $this->color);
    }
}
