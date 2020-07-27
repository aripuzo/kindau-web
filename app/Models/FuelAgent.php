<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuelAgent extends BaseModel
{
    protected $fillable = [
        'subscriber_id', 'pin', 'location', 'state', 'lga', 'area', 'address', 'attendant_name', 'attendant_phones', 'fuel_station_id'
    ];
}
