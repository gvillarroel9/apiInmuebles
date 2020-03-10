<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Comodity;

class ComoditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comodities')->delete();

        $filename = dirname(__FILE__) . '/data/comodity.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $comodityInfo = explode(",", $line);
            $comodity = [
                'name'=> $comodityInfo[0],
                'id'=> $comodityInfo[1],
            ];
            Comodity::create($comodity);
        }
    }
}
