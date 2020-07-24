<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class BaseModel extends Model
{
    use Uuids, SoftDeletes;

    public $incrementing = false;

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    protected $hidden = [
        'deleted_at', 'updated_at',
    ];

    protected function serializeDate(\DateTimeInterface $date){
        return $date->format('c');
    }

}