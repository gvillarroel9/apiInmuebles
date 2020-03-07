<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactmethod extends Model
{
    protected $fillable = [
        'id', 
        'is_social',
        'name'
    ];
}
