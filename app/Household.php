<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    protected $fillable = [
        'id',
        'propertyType',
        'householdin',
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
