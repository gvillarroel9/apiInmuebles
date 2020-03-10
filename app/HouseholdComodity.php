<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseholdComodity extends Model
{
    protected $fillable = [
        'idHousehold', 'idCommodity'
    ];
}
