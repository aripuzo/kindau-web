<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageRequest extends BaseModel
{
    protected $fillable = [
        'subscriber_id', 'page_id', 'service_code'
    ];
}
