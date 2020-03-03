<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        $filename = dirname(__FILE__) . '/data/countries.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $countryInfo = explode(",", $line);
            $country = ['name'=> $countryInfo[1]];
            Country::create($country);
        }
    }
}
