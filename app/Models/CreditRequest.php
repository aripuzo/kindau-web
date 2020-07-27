<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditRequest extends BaseModel
{
    protected $fillable = [
        'subscriber_id', 'token', 'amount', 'status', 'sms_sent', 'telco_id', 'fuel_station_id'
    ];

    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }
}
