<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Continent;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->delete();

        $filename = dirname(__FILE__) . '/data/continents.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $continentInfo = explode(",", $line);
            $continent = [
                    'name'=> $continentInfo[0],
                    'id'=> $continentInfo[1]
            ];
            Continent::create($continent);
        }
    }
}
