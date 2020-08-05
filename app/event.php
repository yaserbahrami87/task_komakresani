<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = [
        'event', 'startdate', 'expiredate','txtevent','img','city_id','category_id','likes'
    ];
}
