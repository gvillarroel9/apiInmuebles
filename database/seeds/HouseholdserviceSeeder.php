<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\HouseholdService;

class HouseholdserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('household_services')->delete();

        $filename = dirname(__FILE__) . '/data/householdservices.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $householdservice = explode(",", $line);
            $householdservice = [
                'name'=> $householdservice[0],
                'id'=> $householdservice[1],
            ];
            HouseholdService::create($householdservice);
        }
    }
}
