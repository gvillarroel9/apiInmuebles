<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();

        $filename = dirname(__FILE__) . '/data/services.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $serviceInfo = explode(",", $line);
            $service = [
                'name'=> $serviceInfo[0],
                'id'=> $serviceInfo[1],
            ];
            Service::create($service);
        }
    }
}
