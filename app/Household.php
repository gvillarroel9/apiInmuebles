<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    protected $fillable = [
        'id',
        'propertyType',
        'household_in',
        'zoneId',
        'roomsNumber',
        'bathroomsNumber',
        'parkingNumbers',
        'details',
        'proximityServicesTransport',
        'location',
        'price',
        'idCurrency',
        'initHour',
        'finishHour'
    ];
}
