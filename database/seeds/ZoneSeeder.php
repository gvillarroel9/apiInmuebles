<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Zone;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->delete();
        $filename = dirname(__FILE__) . '/data/zones.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $zoneInfo = explode(",", $line);
            $zone = [
                'name'=> $zoneInfo[0],
                'id'=> $zoneInfo[1],
                'cityId'=> $zoneInfo[2],              
            ];
            Zone::create($zone);
        }
    }
}
