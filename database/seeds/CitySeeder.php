<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
        $filename = dirname(__FILE__) . '/data/cities.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $cityInfo = explode(",", $line);
            $city = [
                'name'=> $cityInfo[0],
                'id'=> $cityInfo[1],
                'stateId'=> $cityInfo[2],              
            ];
            City::create($city);
        }
    }
}
