<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        $filename = dirname(__FILE__) . '/data/states.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $stateInfo = explode(",", $line);
            $state = [
                'name'=> $stateInfo[0],
                'id'=> $stateInfo[1],
                'countryId'=> $stateInfo[2],              
            ];
            State::create($state);
        }
    }
}
