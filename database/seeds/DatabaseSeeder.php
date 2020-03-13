<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        $this->call(ContinentSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);        
        $this->call(CitySeeder::class);        
        $this->call(ZoneSeeder::class);        
        $this->call(ComoditySeeder::class);        
        $this->call(ServiceSeeder::class);
        $this->call(PropertySeeder::class);
        $this->call(HouseholdInSeeder::class);
        $this->call(CurrencySeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        
    }
}
