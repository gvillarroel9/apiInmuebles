<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'user_email',
        'dni',
        'password',
        'lastname',
        'contact',
        'contact_social', 
        'other_contact',
        'country_id',            
        'local_phone',
        'phone',
        'company_user',
        'company_name',
        'company_rif',
        'company_country_id',
        'company_city_id',
        'company_address',
        'company_rep_name',
        'company_rep_email',
        'language',
        'info_frequency',
        'info_interests',
        'info_email',
        'info_social',
        'info_phone',
        'info_facebook',
        'info_others',
        'service_interest',
        'day',
        'month',
        'year',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
