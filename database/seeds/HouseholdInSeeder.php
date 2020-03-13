<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\HouseholdIn;

class HouseholdInSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('household_ins')->delete();

        $filename = dirname(__FILE__) . '/data/householdin.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $householdinInfo = explode(",", $line);
            $householdin = [
                'name'=> $householdinInfo[0],
                'id'=> $householdinInfo[1],
            ];
            HouseholdIn::create($householdin);
        }
    }
}
