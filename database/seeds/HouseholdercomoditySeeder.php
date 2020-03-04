<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\HouseholdComodity;

class HouseholdercomoditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('household_comodities')->delete();

        $filename = dirname(__FILE__) . '/data/householdcomodity.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $householdcomodityInfo = explode(",", $line);
            $householdcomodity = [
                'name'=> $householdcomodityInfo[0],
                'id'=> $householdcomodityInfo[1],
            ];
            HouseholdComodity::create($householdcomodity);
        }
    }
}
