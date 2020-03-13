<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->delete();

        $filename = dirname(__FILE__) . '/data/currency.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $currencyInfo = explode(",", $line);
            $currency = [
                'name'=> $currencyInfo[0],
                'id'=> $currencyInfo[1],
            ];
            Currency::create($currency);
        }
    }
}
