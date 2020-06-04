<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{
    //
    protected $fillable = [
        'messageid', 'message', 'status','statustext','sender','receptor','date','cost'
    ];
}
