<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => 'cors'], function() {
    Route::group(['prefix' => 'auth'], function () {
        
        Route::post('login', 'AuthController@login');
        Route::post('signup', 'AuthController@signup');
    
        Route::group(['middleware' => 'auth:api'], function() {
            Route::get('logout', 'AuthController@logout');
            Route::get('user', 'AuthController@user');
        });
    });
});

    Route::resource('continents','ContinentsController',['except' => ['create','edit']]);
    Route::resource('countries','CountriesController',['except' => ['create','edit']]);
    Route::get('countries/{continentId}/continent', 'CountriesController@countryByContinentId');
    Route::resource('states','StatesController');
    Route::get('states/{countryId}/country', 'StatesController@stateByCountryId');
    Route::resource('cities','CitiesController',['except' => ['create','edit']]);
    Route::get('cities/{stateId}/state', 'CitiesController@cityByStateId');
    Route::resource('zones','ZonesController',['except' => ['create','edit']]);
    Route::get('zones/{cityId}/city', 'ZonesController@zoneByCityId');

    Route::resource('householdcomodity','HouseholdcomodityController',['except' => ['create','edit']]);
    Route::resource('householdservice','HouseholdserviceController',['except' => ['create','edit']]);
    Route::resource('companies','CompanyController');
    Route::resource('contactmethods','ContactmethodController');