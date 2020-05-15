<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'question'  ,
        'answer'    ,
        'type'  ,
        'cat_id'    ,
        'service_id'    ,
        'project_id'    ,
    ];
}
