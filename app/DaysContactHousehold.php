<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaysContactHousehold extends Model
{
    protected $fillable = [
        'idHousehold',
        'idContactDays'
    ];
}
