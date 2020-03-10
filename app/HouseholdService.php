<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseholdService extends Model
{
    protected $fillable = [
        'idHousehold', 'idServiceHousehold'
    ];
}
