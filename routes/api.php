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

Route::group(['prefix' => 'auth'], function () {
    
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});
    Route::resource('continents','ContinentsController',['except' => ['create','edit']]);
    Route::resource('countries','CountriesController',['except' => ['create','edit']]);
    Route::get('countries/{continentId}/continent', 'CountriesController@countryByContinentId');
    Route::resource('states','StatesController');
    Route::resource('cities','CitiesController',['except' => ['create','edit']]);
    Route::resource('zones','ZonesController',['except' => ['create','edit']]);

    Route::resource('comodity','ComodityController',['except' => ['create','edit']]);
    Route::resource('service','ServiceController',['except' => ['create','edit']]);
    Route::resource('companies','CompanyController');
    Route::post('createCompany', 'CompanyController@createCompany');

    Route::resource('contactmethods','ContactmethodController');
    Route::resource('household','HouseholdController');
    Route::post('createHousehold','HouseholdController@createHousehold');