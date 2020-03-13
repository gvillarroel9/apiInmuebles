<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\ContactDays;

class ContactDaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_days')->delete();

        $filename = dirname(__FILE__) . '/data/contactdays.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $contactdaysInfo = explode(",", $line);
            $contactdays = [
                'name'=> $contactdaysInfo[0],
                'id'=> $contactdaysInfo[1],
            ];
            ContactDays::create($contactdays);
        }
    }
}
