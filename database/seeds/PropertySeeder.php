<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->delete();

        $filename = dirname(__FILE__) . '/data/properties.csv';
        foreach(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $propertyInfo = explode(",", $line);
            $property = [
                'name'=> $propertyInfo[0],
                'id'=> $propertyInfo[1],
            ];
            Property::create($property);
        }
    }
}
