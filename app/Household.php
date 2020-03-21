<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    protected $fillable = [
        'property_type',
        'household_in',
        'zone_id',
        'rooms_number', 
        'bathrooms_number',  
        'parking_numbers',
        'commodities',
        'services',
        'image',
        'video',
        'details', 
        'proximity_services_transport', 
        'location',
        'price',
        'currency',   
        'contact_days',  
        'contact_name', 
        'contact_last_name',  
        'contact_email',
        'contact_phone',
        'init_hour',
        'finish_hour',
    ];
}
